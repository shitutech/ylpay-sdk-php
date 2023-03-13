<?php

namespace Shitutech\YlPay\Modules\Requests\Order;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class RefundDetailRequest extends BaseRequest
{
    /**
     * @var string 营业员登录Token
     */
    protected $token = '';

    /**
     * @var string 翼龙支付订单号
     */
    protected $orderNo = '';

    /**
     * @var string 翼龙退款订单号
     */
    protected $refundOrderNo = '';

    public function getApiPath(): string
    {
        return '/merchant/order/refund_detail';
    }

    /**
     * @param string $token
     * @return RefundDetailRequest
     */
    public function setToken(string $token): RefundDetailRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $orderNo
     * @return RefundDetailRequest
     */
    public function setOrderNo(string $orderNo): RefundDetailRequest
    {
        $this->orderNo = trim($orderNo);
        return $this;
    }

    /**
     * @param string $refundOrderNo
     * @return RefundDetailRequest
     */
    public function setRefundOrderNo(string $refundOrderNo): RefundDetailRequest
    {
        $this->refundOrderNo = trim($refundOrderNo);
        return $this;
    }

}
