<?php

namespace Shitutech\YlPay\Modules\Responses\Merchant;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

class WithdrawResponse extends BaseResponse
{
    /**
     * @var string 查询的商户号
     */
    protected $subMchId = '';

    /**
     * @var string 请求上报的提现订单号
     */
    protected $withdrawOrderNo = '';

    /**
     * @var string 上游受理单号
     */
    protected $acquireOrderNo = '';

    /**
     * @return string
     */
    public function getSubMchId(): string
    {
        return $this->subMchId;
    }

    /**
     * @return string
     */
    public function getWithdrawOrderNo(): string
    {
        return $this->withdrawOrderNo;
    }

    /**
     * @return string
     */
    public function getAcquireOrderNo(): string
    {
        return $this->acquireOrderNo;
    }

}