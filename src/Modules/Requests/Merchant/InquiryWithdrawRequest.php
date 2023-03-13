<?php

namespace Shitutech\YlPay\Modules\Requests\Merchant;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

class InquiryWithdrawRequest extends BaseRequest
{
    /**
     * @var string 营业员登录Token
     */
    protected $token = '';

    /**
     * @var string 待查询的盛付通商户号(一般为8位长度数字字符串)
     */
    protected $merchantNo = '';

    /**
     * @var string 待查询的盛付通商户号所属的虚拟代理号（分账接收方需传，具体可用值请询问BD或技术支持）
     */
    protected $virtualAgent = '';

    /**
     * @var string 商户提现订单号（请自行维护该订单记录）
     */
    protected $withdrawOrderNo = '';

    /**
     * @var string 上游提现受理单号
     */
    protected $acquireOrderNo = '';

    protected const IGNORE_EMPTY_PROPERTIES = ['virtualAgent', 'withdrawOrderNo', 'acquireOrderNo',];

    /**
     * @inheritDoc
     */
    public function getApiPath(): string
    {
        return '/merchant/sub/inquiry_withdraw';
    }

    /**
     * @param string $token
     * @return InquiryWithdrawRequest
     */
    public function setToken(string $token): InquiryWithdrawRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $merchantNo
     * @return InquiryWithdrawRequest
     */
    public function setMerchantNo(string $merchantNo): InquiryWithdrawRequest
    {
        $this->merchantNo = trim($merchantNo);
        return $this;
    }

    /**
     * @param string $virtualAgent
     * @return InquiryWithdrawRequest
     */
    public function setVirtualAgent(string $virtualAgent): InquiryWithdrawRequest
    {
        $this->virtualAgent = trim($virtualAgent);
        return $this;
    }

    /**
     * @param string $withdrawOrderNo
     * @return InquiryWithdrawRequest
     */
    public function setWithdrawOrderNo(string $withdrawOrderNo): InquiryWithdrawRequest
    {
        $this->withdrawOrderNo = trim($withdrawOrderNo);
        return $this;
    }

    /**
     * @param string $acquireOrderNo
     * @return InquiryWithdrawRequest
     */
    public function setAcquireOrderNo(string $acquireOrderNo): InquiryWithdrawRequest
    {
        $this->acquireOrderNo = trim($acquireOrderNo);
        return $this;
    }

}