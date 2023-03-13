<?php

namespace Shitutech\YlPay\Modules\Requests\Refund;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class ShareRollbackNotifyRequest extends BaseRequest
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
     * @var string 订单金额（单位：元）
     */
    protected $totalFee = '';

    /**
     * @var string 回退状态
     */
    protected $status = '';

    public function getApiPath(): string
    {
        return '/merchant/sharing/share_rollback_notify';
    }

    /**
     * @param string $token
     * @return ShareRollbackNotifyRequest
     */
    public function setToken(string $token): ShareRollbackNotifyRequest
    {
        $this->token = $token;
        return $this;
    }

    /**
     * @param string $orderNo
     * @return ShareRollbackNotifyRequest
     */
    public function setOrderNo(string $orderNo): ShareRollbackNotifyRequest
    {
        $this->orderNo = $orderNo;
        return $this;
    }

    /**
     * @param string $totalFee
     * @return ShareRollbackNotifyRequest
     */
    public function setTotalFee(string $totalFee): ShareRollbackNotifyRequest
    {
        $this->totalFee = $totalFee;
        return $this;
    }

    /**
     * @param string $status
     * @return ShareRollbackNotifyRequest
     */
    public function setStatus(string $status): ShareRollbackNotifyRequest
    {
        $this->status = $status;
        return $this;
    }
    
}
