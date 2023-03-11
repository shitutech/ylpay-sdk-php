<?php

namespace Shitutech\YlPay\Modules\Requests\Payment;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class ScanPayRequest extends BaseRequest
{
    /**
     * @var string 营业员登录Token
     */
    protected $token = '';

    /**
     * @var string 订单金额（单位：元；最多两位小数）
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
     * @var string 支付后回调通知地址
     */
    protected $notify_url = '';

    protected const IGNORE_EMPTY_PROPERTIES = ['outMerchantOrderNo', 'isNeedShare', 'notify_url',];

    public function getApiPath(): string
    {
        return '/merchant/pay/qrcode_pay';
    }

    /**
     * @param string $token
     * @return ScanPayRequest
     */
    public function setToken(string $token): ScanPayRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $totalFee
     * @return ScanPayRequest
     */
    public function setTotalFee(string $totalFee): ScanPayRequest
    {
        $this->totalFee = trim($totalFee);
        return $this;
    }

    /**
     * @param string $outMerchantOrderNo
     * @return ScanPayRequest
     */
    public function setOutMerchantOrderNo(string $outMerchantOrderNo): ScanPayRequest
    {
        $this->outMerchantOrderNo = trim($outMerchantOrderNo);
        return $this;
    }

    /**
     * @param string $isNeedShare
     * @return ScanPayRequest
     */
    public function setIsNeedShare(string $isNeedShare): ScanPayRequest
    {
        $this->isNeedShare = trim($isNeedShare);
        return $this;
    }

    /**
     * @param string $notify_url
     * @return ScanPayRequest
     */
    public function setNotifyUrl(string $notify_url): ScanPayRequest
    {
        $this->notify_url = trim($notify_url);
        return $this;
    }
}
