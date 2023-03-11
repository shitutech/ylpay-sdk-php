<?php

namespace Shitutech\YlPay\Modules\Requests\Payment;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class DynamicPayRequest extends BaseRequest
{
    /**
     * @var string 门店code（大写S开头）
     */
    protected $storeCode = '';

    /**
     * @var string 订单金额（单位：元）
     */
    protected $totalFee = '';

    /**
     * @var string 外部商户订单号（建议上传）
     */
    protected $outMerchantOrderNo = '';

    /**
     * @var string 是否为分账订单
     */
    protected $isNeedShare = '';

    /**
     * @var string 备注
     */
    protected $remark = '';

    /**
     * @var string 支付后回调通知地址
     */
    protected $notify_url = '';

    protected const IGNORE_EMPTY_PROPERTIES = ['outMerchantOrderNo', 'isNeedShare', 'remark', 'notify_url',];

    public function getApiPath(): string
    {
        return '/merchant/pay/qr_pay';
    }

    /**
     * @param string $storeCode
     * @return DynamicPayRequest
     */
    public function setStoreCode(string $storeCode): DynamicPayRequest
    {
        $this->storeCode = trim($storeCode);
        return $this;
    }

    /**
     * @param string $totalFee
     * @return DynamicPayRequest
     */
    public function setTotalFee(string $totalFee): DynamicPayRequest
    {
        $this->totalFee = trim($totalFee);
        return $this;
    }

    /**
     * @param string $outMerchantOrderNo
     * @return DynamicPayRequest
     */
    public function setOutMerchantOrderNo(string $outMerchantOrderNo): DynamicPayRequest
    {
        $this->outMerchantOrderNo = trim($outMerchantOrderNo);
        return $this;
    }

    /**
     * @param string $isNeedShare
     * @return DynamicPayRequest
     */
    public function setIsNeedShare(string $isNeedShare): DynamicPayRequest
    {
        $this->isNeedShare = trim($isNeedShare);
        return $this;
    }

    /**
     * @param string $remark
     * @return DynamicPayRequest
     */
    public function setRemark(string $remark): DynamicPayRequest
    {
        $this->remark = trim($remark);
        return $this;
    }

    /**
     * @param string $notify_url
     * @return DynamicPayRequest
     */
    public function setNotifyUrl(string $notify_url): DynamicPayRequest
    {
        $this->notify_url = trim($notify_url);
        return $this;
    }

}
