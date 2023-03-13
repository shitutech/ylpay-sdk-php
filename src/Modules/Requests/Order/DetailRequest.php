<?php

namespace Shitutech\YlPay\Modules\Requests\Order;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class DetailRequest extends BaseRequest
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
        return '/merchant/order/order_detail';
    }

    /**
     * @param string $token
     * @return DetailRequest
     */
    public function setToken(string $token): DetailRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $orderNo
     * @return DetailRequest
     */
    public function setOrderNo(string $orderNo): DetailRequest
    {
        $this->orderNo = trim($orderNo);
        return $this;
    }

}
