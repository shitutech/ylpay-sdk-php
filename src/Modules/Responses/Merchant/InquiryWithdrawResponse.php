<?php

namespace Shitutech\YlPay\Modules\Responses\Merchant;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

class InquiryWithdrawResponse extends BaseResponse
{
    /**
     * @var string 查询的商户号
     */
    protected $subMchId = '';

    /**
     * @var array 上游返回的提现结果
     */
    protected $result = [];

    /**
     * @return string
     */
    public function getSubMchId(): string
    {
        return $this->subMchId;
    }

    /**
     * @return array
     */
    public function getResult(): array
    {
        return $this->result;
    }

}