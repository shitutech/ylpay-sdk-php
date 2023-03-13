<?php

namespace Shitutech\YlPay\Modules\Responses\Refund;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class CancelResponse extends BaseResponse
{
    /**
     * @var string 第三方业务码
     */
    protected $thirdCode = '';

    /**
     * @var string 翼龙商户名称
     */
    protected $merchantName = '';

    /**
     * @var string 所属门店（分店）名称
     */
    protected $storeName = '';

    /**
     * @var string 营业员编号
     */
    protected $clerk = '';

    /**
     * @var string 翼龙订单号
     */
    protected $orderNo = '';

    /**
     * @var string 订单金额（单位：元）
     */
    protected $totalFee = '';

    /**
     * @var string 支付方式
     */
    protected $payType = '';

    /**
     * @var string 上游交易流水号
     */
    protected $tradeNo = '';

    /**
     * @var string 订单状态
     */
    protected $orderStatus = '';

    /**
     * @var string 付款支付宝账号
     */
    protected $userAlipayAccount = '';

    /**
     * @var string 撤销时间
     */
    protected $cancelTime = '';

    /**
     * @return string
     */
    public function getThirdCode(): string
    {
        return $this->thirdCode;
    }

    /**
     * @return string
     */
    public function getMerchantName(): string
    {
        return $this->merchantName;
    }

    /**
     * @return string
     */
    public function getStoreName(): string
    {
        return $this->storeName;
    }

    /**
     * @return string
     */
    public function getClerk(): string
    {
        return $this->clerk;
    }

    /**
     * @return string
     */
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @return string
     */
    public function getTotalFee(): string
    {
        return $this->totalFee;
    }

    /**
     * @return string
     */
    public function getPayType(): string
    {
        return $this->payType;
    }

    /**
     * @return string
     */
    public function getTradeNo(): string
    {
        return $this->tradeNo;
    }

    /**
     * @return string
     */
    public function getOrderStatus(): string
    {
        return $this->orderStatus;
    }

    /**
     * @return string
     */
    public function getUserAlipayAccount(): string
    {
        return $this->userAlipayAccount;
    }

    /**
     * @return string
     */
    public function getCancelTime(): string
    {
        return $this->cancelTime;
    }
    
}
