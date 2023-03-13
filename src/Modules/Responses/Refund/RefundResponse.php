<?php

namespace Shitutech\YlPay\Modules\Responses\Refund;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class RefundResponse extends BaseResponse
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
     * @var string 终端号
     */
    protected $terminalNo = '';

    /**
     * @var string 翼龙订单号
     */
    protected $orderNo = '';

    /**
     * @var string 订单金额（单位：元）
     */
    protected $totalFee = '';

    /**
     * @var string 交易金额（单位：元）
     */
    protected $receiptFee = '';

    /**
     * @var string 退款金额
     */
    protected $refundFee = '';

    /**
     * @var string 支付方式
     */
    protected $payType = '';

    /**
     * @var string 最近一次退款时间（成功或进行中的）
     */
    protected $refundTime = '';

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
     * @var string 退款订单号
     */
    protected $refundOrderNo = '';

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
    public function getTerminalNo(): string
    {
        return $this->terminalNo;
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
    public function getReceiptFee(): string
    {
        return $this->receiptFee;
    }

    /**
     * @return string
     */
    public function getRefundFee(): string
    {
        return $this->refundFee;
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
    public function getRefundTime(): string
    {
        return $this->refundTime;
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
    public function getRefundOrderNo(): string
    {
        return $this->refundOrderNo;
    }

}
