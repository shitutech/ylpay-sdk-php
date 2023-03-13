<?php

namespace Shitutech\YlPay\Modules\Requests\Refund;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class CancelRequest extends BaseRequest
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
        return '/merchant/refund/cancel';
    }

    /**
     * @param string $token
     * @return CancelRequest
     */
    public function setToken(string $token): CancelRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $orderNo
     * @return CancelRequest
     */
    public function setOrderNo(string $orderNo): CancelRequest
    {
        $this->orderNo = trim($orderNo);
        return $this;
    }

}
