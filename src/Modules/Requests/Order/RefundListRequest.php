<?php

namespace Shitutech\YlPay\Modules\Requests\Order;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class RefundListRequest extends BaseRequest
{
    /**
     * @var string 营业员登录Token
     */
    protected $token = '';

    /**
     * @var string 翼龙订单号
     */
    protected $orderNo = '';

    /**
     * @var string 退款状态
     */
    protected $status = '';

    protected const IGNORE_EMPTY_PROPERTIES = ['status',];

    public function getApiPath(): string
    {
        return '/merchant/order/refund_list';
    }

    /**
     * @param string $token
     * @return RefundListRequest
     */
    public function setToken(string $token): RefundListRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $orderNo
     * @return RefundListRequest
     */
    public function setOrderNo(string $orderNo): RefundListRequest
    {
        $this->orderNo = trim($orderNo);
        return $this;
    }

    /**
     * @param string $status
     * @return RefundListRequest
     */
    public function setStatus(string $status): RefundListRequest
    {
        $this->status = trim($status);
        return $this;
    }

}
