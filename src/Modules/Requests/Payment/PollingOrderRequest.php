<?php

namespace Shitutech\YlPay\Modules\Requests\Payment;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class PollingOrderRequest extends BaseRequest
{
    /**
     * @var string 营业员登录Token
     */
    protected $token = '';

    /**
     * @var string 翼龙订单号
     */
    protected $orderNo = '';

    public function getApiPath(): string
    {
        return '/merchant/pay/query_order';
    }

    /**
     * @param string $token
     * @return PollingOrderRequest
     */
    public function setToken(string $token): PollingOrderRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $orderNo
     * @return PollingOrderRequest
     */
    public function setOrderNo(string $orderNo): PollingOrderRequest
    {
        $this->orderNo = trim($orderNo);
        return $this;
    }

}
