<?php

namespace Shitutech\YlPay\Modules\Requests\Merchant;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class InquiryBalanceRequest extends BaseRequest
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

    protected const IGNORE_EMPTY_PROPERTIES = ['virtualAgent',];

    public function getApiPath(): string
    {
        return '/merchant/sub/inquiry_balance';
    }

    /**
     * @param string $token
     * @return InquiryBalanceRequest
     */
    public function setToken(string $token): InquiryBalanceRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $merchantNo
     * @return InquiryBalanceRequest
     */
    public function setMerchantNo(string $merchantNo): InquiryBalanceRequest
    {
        $this->merchantNo = trim($merchantNo);
        return $this;
    }

    /**
     * @param string $virtualAgent
     * @return InquiryBalanceRequest
     */
    public function setVirtualAgent(string $virtualAgent): InquiryBalanceRequest
    {
        $this->virtualAgent = trim($virtualAgent);
        return $this;
    }

}
