<?php

namespace Shitutech\YlPay\Modules\Requests\Refund;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class RefundRequest extends BaseRequest
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
     * @var string 待退款金额（单位：元）
     */
    protected $money = '';

    /**
     * @var string 退款密码（仅商户开启免密退款时可选）
     */
    protected $adminPwd = '';

    protected const IGNORE_EMPTY_PROPERTIES = ['adminPwd',];

    public function getApiPath(): string
    {
        return '/merchant/refund/refund';
    }

    /**
     * @param string $token
     * @return RefundRequest
     */
    public function setToken(string $token): RefundRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $orderNo
     * @return RefundRequest
     */
    public function setOrderNo(string $orderNo): RefundRequest
    {
        $this->orderNo = trim($orderNo);
        return $this;
    }

    /**
     * @param string $money
     * @return RefundRequest
     */
    public function setMoney(string $money): RefundRequest
    {
        $this->money = trim($money);
        return $this;
    }

    /**
     * @param string $adminPwd
     * @return RefundRequest
     */
    public function setAdminPwd(string $adminPwd): RefundRequest
    {
        $this->adminPwd = trim($adminPwd);
        return $this;
    }
}
