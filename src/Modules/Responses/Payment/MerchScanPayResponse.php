<?php

namespace Shitutech\YlPay\Modules\Responses\Payment;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class MerchScanPayResponse extends BaseResponse
{
    /**
     * @var string 第三方业务码
     */
    protected $thirdCode = '';

    /**
     * @var string 翼龙商户号
     */
    protected $mchid = '';

    /**
     * @var string 翼龙商户名称
     */
    protected $merchantName = '';

    /**
     * @var string 门店Code
     */
    protected $storeCode = '';

    /**
     * @var string 所属门店（分店）名称
     */
    protected $storeName = '';

    /**
     * @var string 翼龙订单号
     */
    protected $orderNo = '';

    /**
     * @var string 商户订单号
     */
    protected $outMerchantOrderNo = '';

    /**
     * @var string 订单金额（单位：元）
     */
    protected $totalFee = '';

    /**
     * @var string 支付宝打折金额
     */
    protected $alipayDiscount = '';

    /**
     * @var string 微信打折金额
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
     * @var string 订单状态码描述
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
     * @var string 交易流水号（当前恒为0）
     */
    protected $tradeNo = '';

    /**
     * @var string 支付宝账号（当前恒为0）
     */
    protected $userAlipayAccount = '';

    /**
     * @var string 订单类型（当前恒为：CASHIER_ORDER - 收款订单）
     */
    protected $orderType = '';

    /**
     * @var array 支付参数
     */
    protected $cloudPayInfo = [];

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
    public function getMchid(): string
    {
        return $this->mchid;
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
    public function getStoreCode(): string
    {
        return $this->storeCode;
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
    public function getOrderNo(): string
    {
        return $this->orderNo;
    }

    /**
     * @return string
     */
    public function getOutMerchantOrderNo(): string
    {
        return $this->outMerchantOrderNo;
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
    public function getOrderType(): string
    {
        return $this->orderType;
    }

    /**
     * @return array
     */
    public function getCloudPayInfo(): array
    {
        return $this->cloudPayInfo;
    }

}
