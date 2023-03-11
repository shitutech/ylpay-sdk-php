<?php

namespace Shitutech\YlPay\Modules\Responses\Payment;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class PollingOrderResponse extends BaseResponse
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
     * @var string 所属门店编号
     */
    protected $storeNumber = '';

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
     * @var string 支付宝优惠金额（单位：元）
     */
    protected $alipayDiscount = '';

    /**
     * @var string 微信优惠（单位：元）
     */
    protected $wxpayDiscount = '';

    /**
     * @var string 交易金额
     */
    protected $receiptFee = '';

    /**
     * @var string 订单状态码
     */
    protected $statusCode = '';

    /**
     * @var string 订单状态描述
     */
    protected $orderStatus = '';

    /**
     * @var string 支付方式
     */
    protected $payType = '';

    /**
     * @var string 支付时间
     */
    protected $payTime = '';

    /**
     * @var string 订单创建时间
     */
    protected $createTime = '';

    /**
     * @var string 订单取消时间
     */
    protected $cancelTime = '';

    /**
     * @var string 上游交易流水号
     */
    protected $tradeNo = '';

    /**
     * @var string 付款支付宝账号
     */
    protected $userAlipayAccount = '';

    /**
     * @var string 错误消息
     */
    protected $errMsg = '';

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
    public function getStoreNumber(): string
    {
        return $this->storeNumber;
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
    public function getAlipayDiscount(): string
    {
        return $this->alipayDiscount;
    }

    /**
     * @return string
     */
    public function getWxpayDiscount(): string
    {
        return $this->wxpayDiscount;
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
    public function getStatusCode(): string
    {
        return $this->statusCode;
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
    public function getPayType(): string
    {
        return $this->payType;
    }

    /**
     * @return string
     */
    public function getPayTime(): string
    {
        return $this->payTime;
    }

    /**
     * @return string
     */
    public function getCreateTime(): string
    {
        return $this->createTime;
    }

    /**
     * @return string
     */
    public function getCancelTime(): string
    {
        return $this->cancelTime;
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
    public function getUserAlipayAccount(): string
    {
        return $this->userAlipayAccount;
    }

    /**
     * @return string
     */
    public function getErrMsg(): string
    {
        return $this->errMsg;
    }

}
