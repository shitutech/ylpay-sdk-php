<?php

namespace Shitutech\YlPay\Modules\Responses\Payment;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class ScanPayResponse extends BaseResponse
{
    protected $thirdCode = '';
    protected $merchantName = '';
    protected $storeName = '';
    protected $clerk = '';
    protected $orderNo = '';
    protected $totalFee = '';
    protected $receiptFee = '';
    protected $payType = '';
    protected $createTime = '';
    protected $qrCode = '';

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
    public function getReceiptFee(): string
    {
        return $this->receiptFee;
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
    public function getCreateTime(): string
    {
        return $this->createTime;
    }

    /**
     * @return string
     */
    public function getQrCode(): string
    {
        return $this->qrCode;
    }
}
