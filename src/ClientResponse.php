<?php

namespace Shitutech\YlPay;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class ClientResponse
{
    /**
     * @var null|BaseResponse
     */
    protected $response = null;

    /**
     * @var string
     */
    protected $respData = '';

    /**
     * @param BaseResponse $response
     * @param string $respJsonData
     */
    public function __construct(BaseResponse $response, string $respJsonData)
    {
        $this->response = $response;
        $this->respData = $respJsonData;
    }

    /**
     * @return BaseResponse
     * @throws \Exception
     */
    public function fetchResult(): BaseResponse
    {
        $respData = trim($this->respData);
        if (empty($respData)) {
            throw new \Exception("响应数据为空", 1000);
        }

        $decodeData = json_decode($respData, true);
        if (!is_array($decodeData)) {
            throw new \Exception("响应数据 JSON 解码失败", 1000);
        }

        if (!isset($decodeData['status'])) {
            throw new \Exception("响应数据缺少状态码字段 status", 1000);
        }

        if ($decodeData['status'] != 'SUCCESS') {
            throw new \Exception("响应报告发生异常。Err: {$decodeData['errCode']}::{$decodeData['errMsg']}", 1000);
        }

        if ($this->response->isD2P()) {
            if (!isset($decodeData['data'])) {
                throw new \Exception("响应数据缺少业务数据字段 data", 1000);
            }

            if (!is_array($decodeData['data']) || !$decodeData['data']) {
                throw new \Exception("业务数据无效", 1000);
            }

            $bizData = $decodeData['data'];
            unset($decodeData['data']);

            $decodeData = array_merge($bizData, $decodeData);
        }

        $this->response->setProperty($decodeData);

        return $this->response;
    }

    public function toArray(): array
    {
        return $this->response->toArray();
    }

    public function toJson()
    {
        return $this->response->toJSON();
    }
}
