<?php

namespace Shitutech\YlPay\Modules\Requests\Merchant;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class WithdrawRequest extends BaseRequest
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
     * @var string 提现金额（单位：分）
     */
    protected $amount = '';

    protected const IGNORE_EMPTY_PROPERTIES = ['virtualAgent',];

    /**
     * @inheritDoc
     */
    public function getApiPath(): string
    {
        return '/merchant/sub/withdraw';
    }

    /**
     * @param string $token
     * @return WithdrawRequest
     */
    public function setToken(string $token): WithdrawRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $merchantNo
     * @return WithdrawRequest
     */
    public function setMerchantNo(string $merchantNo): WithdrawRequest
    {
        $this->merchantNo = trim($merchantNo);
        return $this;
    }

    /**
     * @param string $virtualAgent
     * @return WithdrawRequest
     */
    public function setVirtualAgent(string $virtualAgent): WithdrawRequest
    {
        $this->virtualAgent = trim($virtualAgent);
        return $this;
    }

    /**
     * @param string $withdrawOrderNo
     * @return WithdrawRequest
     */
    public function setWithdrawOrderNo(string $withdrawOrderNo): WithdrawRequest
    {
        $this->withdrawOrderNo = trim($withdrawOrderNo);
        return $this;
    }

    /**
     * @param string $amount
     * @return WithdrawRequest
     */
    public function setAmount(string $amount): WithdrawRequest
    {
        $this->amount = trim($amount);
        return $this;
    }

}