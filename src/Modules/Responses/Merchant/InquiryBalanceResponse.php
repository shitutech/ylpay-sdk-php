<?php

namespace Shitutech\YlPay\Modules\Responses\Merchant;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class InquiryBalanceResponse extends BaseResponse
{
    /**
     * @var string 查询的商户号
     */
    protected $subMchId = '';

    /**
     * @var string 账户可用余额（单位：元）
     */
    protected $balance = '';

    /**
     * @var string 账户总余额（balance + frozenBalance）（单位：元）
     */
    protected $totalBalance = '';

    /**
     * @var string 账户冻结余额（单位：元）
     */
    protected $frozenBalance = '';

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
    public function getBalance(): string
    {
        return $this->balance;
    }

    /**
     * @return string
     */
    public function getTotalBalance(): string
    {
        return $this->totalBalance;
    }

    /**
     * @return string
     */
    public function getFrozenBalance(): string
    {
        return $this->frozenBalance;
    }

}
