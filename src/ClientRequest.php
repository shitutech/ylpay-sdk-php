<?php

namespace Shitutech\YlPay;

use Shitutech\YlPay\Helpers\UtilHelper;
use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class ClientRequest
{
    /**
     * @var null|BaseRequest 接口请求类
     */
    protected $request = null;

    /**
     * @var string curl 用户代理字符串
     */
    protected $userAgent = 'YlPaySdk/v1.0.0';

    /**
     * @var string
     */
    protected $contentType = 'application/x-www-form-urlencoded;charset=UTF-8';

    /**
     * @var float 请求超时时间
     */
    protected $timeout = 15.0;

    /**
     * @var string
     */
    protected $signStr = '';

    public function __construct(BaseRequest $request)
    {
        $this->request = $request;
    }

    /**
     * @param string $userAgent
     * @return ClientRequest
     */
    public function setUserAgent(string $userAgent): ClientRequest
    {
        $userAgent = trim($userAgent);
        if ($userAgent) {
            $this->userAgent .= " {$userAgent}";
        }

        return $this;
    }

    /**
     * @param string $contentType
     * @return ClientRequest
     */
    public function setContentType(string $contentType): ClientRequest
    {
        $contentType = trim($contentType);
        if ($contentType) {
            $this->contentType = $contentType;
        }

        return $this;
    }

    /**
     * @param float $timeout
     * @return ClientRequest
     */
    public function setTimeout(float $timeout): ClientRequest
    {
        $this->timeout = $timeout > 0 ? $timeout : 15.0;
        return $this;
    }

    /**
     * @return string
     */
    public function getSignStr(): string
    {
        return $this->signStr;
    }

    /**
     * @param string $signKey
     * @return string
     * @throws \Exception
     */
    public function send(string $signKey = ''): string
    {
        $domain = 'https://guanj.51wanquan.com';

        $postData = $this->request->fetchBizItems();

        $postData['nonceStr'] = UtilHelper::randomStr(36);
        $postData['timestamp'] = time();

        $signKey = trim($signKey);
        if ($signKey) {
            $postData['sign'] = $this->calculateSign($postData, $signKey);
        }

        $ch = curl_init();

        $headers = [
            'Content-Type: ' . $this->contentType,
            // 'Content-Length: ' . strlen($dataJson),
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_URL, $domain . $this->request->getApiPath());
        curl_setopt($ch, CURLOPT_USERAGENT, $this->userAgent);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->timeout);
        curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);

        $data = curl_exec($ch);
        // $status = curl_getinfo($ch);
        $errNo = curl_errno($ch);
        $errMsg = curl_error($ch);
        curl_close($ch);

        if ($errNo) {
            throw new \Exception("CURL 请求发生异常。Err: {$errNo}::{$errMsg}", 1000);
        }

        $data = trim($data);
        if (empty($data)) {
            throw new \Exception("CURL 远程请求响应未返回任何数据", 1000);
        }

        return $data;
    }

    protected function calculateSign(array $params, string $signKey): string
    {
        // 兼容 notify_url URL ENCODE 问题，强制签名时该字符串必须是 URL ENCODE 后的字符串
        if (isset($params['notify_url']) && $params['notify_url'] && preg_match("#^https?://#", $params['notify_url'])) {
            $params['notify_url'] = urlencode($params['notify_url']);
        }

        $signStr = '';
        ksort($params);

        foreach ($params as $key => $val) {
            if ($val === '' || $val === null || is_array($val)) {
                continue;
            }

            $signStr .= ($signStr ? '&' : '') . "{$key}={$val}";
        }

        $signStrWithKey = $signStr . '&key=' . $signKey;

        $this->signStr = $signStr . '&key=';

        $signHash = hash_hmac('sha256', $signStrWithKey, $signKey);

        return strtoupper($signHash);
    }
}
