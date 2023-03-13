<?php

namespace Shitutech\YlPay\Modules\Responses\Order;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class DetailResponse extends BaseResponse
{
    /**
     * @var string 门店（分店）名称
     */
    protected $storeName = '';

    /**
     * @var string 商户名称
     */
    protected $merchantName = '';

    /**
     * @var string 营业员编号
     */
    protected $clerk = '';

    /**
     * @var string 翼龙订单号
     */
    protected $orderNo = '';

    /**
     * @var string 上游交易流水号或订单号
     */
    protected $tradeNo = '';

    /**
     * @var string 交易类型
     */
    protected $payType = '';

    /**
     * @var string 支付方式
     */
    protected $payChannel = '';

    /**
     * @var string 订单金额
     */
    protected $totalFee = '';

    /**
     * @var string 支付宝优惠金额
     */
    protected $alipayDiscount = '';

    /**
     * @var string 微信优惠金额
     */
    protected $wxpayDiscount = '';

    /**
     * @var string 实收金额
     */
    protected $receiptFee = '';

    /**
     * @var string 消费积分（当前恒为0）
     */
    protected $points = '';

    /**
     * @var string 付款支付宝账号
     */
    protected $userAlipayAccount = '';

    /**
     * @var string 订单状态码
     */
    protected $statusCode = '';

    /**
     * @var string 订单状态
     */
    protected $orderStatus = '';

    /**
     * @var string 订单创建时间
     */
    protected $createTime = '';

    /**
     * @var string 订单支付时间（个别上游返回可能为订单创建时间）
     */
    protected $payTime = '';

    /**
     * @var string 取消时间
     */
    protected $cancelTime = '';

    /**
     * @var string 店员退款时间设置（单位：秒）
     */
    protected $operatorRefundTime = 0;

    /**
     * @var string 店长退款时间设置（单位：秒）
     */
    protected $managerRefundTime = 0;

    /**
     * @var string 成功/进行中的退款记录
     */
    protected $refundRecord = '';

    /**
     * @var string 付款状态
     */
    protected $payStatus = '';

    /**
     * @var string 订单状态
     */
    protected $relOrderStatus = '';

    /**
     * @var string 营业员ID
     */
    protected $operatorId = 0;

    /**
     * @var string 门店ID
     */
    protected $storeId = 0;

    /**
     * @var string 订单ID
     */
    protected $orderId = 0;

    /**
     * @var string 退款金额
     */
    protected $refundMoney = '';

    /**
     * @var int 商户打印次数
     */
    protected $printBnum = 0;

    /**
     * @var int 用户打印次数
     */
    protected $printCnum = 0;

    /**
     * @var string 退款金额，当前同 refundMoney
     */
    protected $refundFee = '';

    /**
     * @var string 交易通道
     */
    protected $bank_type = '';

    /**
     * @var string 外部订单号
     */
    protected $term_trans_seq = '';

    /**
     * @var string 付款时间
     */
    protected $trade_time = '';

    /**
     * @var string 最近一次成功/进行中的退款时间
     */
    protected $refundTime = '';

    /**
     * @var string 外部商户订单号
     */
    protected $outMerchantOrderNo = '';

    /**
     * @var string 上游交易订单号（微信、支付宝账单的商户订单号）
     */
    protected $accountOrderNo = '';

    /**
     * @var int 是否需要分账 0 不需要 1 商户自主分账
     */
    protected $needShare = 0;

    /**
     * @var string 商户自主分账时分账回退状态 0 待处理 1 分账已全部回退成功，可退款 2 未调用分账，可退款
     */
    protected $shareReturnStatus = '';

    /**
     * @var string 上游订单号（盛付通新聚合时作为分账参数使用）
     */
    protected $transactionId = '';

    /**
     * @var string 品类商品名称（特定商户定制功能，其他商户无须关注）
     */
    protected $commodityCategory = '';

    /**
     * @var int 是否免密退款 1 需密码退款 2 免密退款
     */
    protected $freePassword = 0;

    public function isD2P(): bool
    {
        return true;
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
    public function getMerchantName(): string
    {
        return $this->merchantName;
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
    public function getTradeNo(): string
    {
        return $this->tradeNo;
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
    public function getPayChannel(): string
    {
        return $this->payChannel;
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
    public function getPoints(): string
    {
        return $this->points;
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
    public function getCreateTime(): string
    {
        return $this->createTime;
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
    public function getCancelTime(): string
    {
        return $this->cancelTime;
    }

    /**
     * @return int|string
     */
    public function getOperatorRefundTime()
    {
        return $this->operatorRefundTime;
    }

    /**
     * @return int|string
     */
    public function getManagerRefundTime()
    {
        return $this->managerRefundTime;
    }

    /**
     * @return string
     */
    public function getRefundRecord(): string
    {
        return $this->refundRecord;
    }

    /**
     * @return string
     */
    public function getPayStatus(): string
    {
        return $this->payStatus;
    }

    /**
     * @return string
     */
    public function getRelOrderStatus(): string
    {
        return $this->relOrderStatus;
    }

    /**
     * @return int|string
     */
    public function getOperatorId()
    {
        return $this->operatorId;
    }

    /**
     * @return int|string
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * @return int|string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getRefundMoney(): string
    {
        return $this->refundMoney;
    }

    /**
     * @return int
     */
    public function getPrintBnum(): int
    {
        return $this->printBnum;
    }

    /**
     * @return int
     */
    public function getPrintCnum(): int
    {
        return $this->printCnum;
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
    public function getBankType(): string
    {
        return $this->bank_type;
    }

    /**
     * @return string
     */
    public function getTermTransSeq(): string
    {
        return $this->term_trans_seq;
    }

    /**
     * @return string
     */
    public function getTradeTime(): string
    {
        return $this->trade_time;
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
    public function getOutMerchantOrderNo(): string
    {
        return $this->outMerchantOrderNo;
    }

    /**
     * @return string
     */
    public function getAccountOrderNo(): string
    {
        return $this->accountOrderNo;
    }

    /**
     * @return int
     */
    public function getNeedShare(): int
    {
        return $this->needShare;
    }

    /**
     * @return string
     */
    public function getShareReturnStatus(): string
    {
        return $this->shareReturnStatus;
    }

    /**
     * @return string
     */
    public function getTransactionId(): string
    {
        return $this->transactionId;
    }

    /**
     * @return string
     */
    public function getCommodityCategory(): string
    {
        return $this->commodityCategory;
    }

    /**
     * @return int
     */
    public function getFreePassword(): int
    {
        return $this->freePassword;
    }
    
}
