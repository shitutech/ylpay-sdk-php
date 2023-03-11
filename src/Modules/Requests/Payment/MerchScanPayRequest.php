<?php

namespace Shitutech\YlPay\Modules\Requests\Payment;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class MerchScanPayRequest extends BaseRequest
{
    /**
     * @var string 门店code（大写S开头）
     */
    protected $storeCode = '';

    /**
     * @var string 订单金额（单位：元；最多两位小数）
     */
    protected $totalFee = '';

    /**
     * @var string 微信公众号或支付宝APPID
     */
    protected $appid = '';

    /**
     * @var string 对应APPID下的用户openid（微信）或userid（支付宝）
     */
    protected $openid = '';

    /**
     * @var string 支付渠道（1 微信 2 支付宝 3 云闪付【暂未支持】）
     */
    protected $payChannel = '';

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
        return '/merchant/pay/merchant_wap_pay';
    }

    /**
     * @param string $storeCode
     * @return MerchScanPayRequest
     */
    public function setStoreCode(string $storeCode): MerchScanPayRequest
    {
        $this->storeCode = trim($storeCode);
        return $this;
    }

    /**
     * @param string $totalFee
     * @return MerchScanPayRequest
     */
    public function setTotalFee(string $totalFee): MerchScanPayRequest
    {
        $this->totalFee = trim($totalFee);
        return $this;
    }

    /**
     * @param string $appid
     * @return MerchScanPayRequest
     */
    public function setAppid(string $appid): MerchScanPayRequest
    {
        $this->appid = trim($appid);
        return $this;
    }

    /**
     * @param string $openid
     * @return MerchScanPayRequest
     */
    public function setOpenid(string $openid): MerchScanPayRequest
    {
        $this->openid = trim($openid);
        return $this;
    }

    /**
     * @param string $payChannel
     * @return MerchScanPayRequest
     */
    public function setPayChannel(string $payChannel): MerchScanPayRequest
    {
        $this->payChannel = trim($payChannel);
        return $this;
    }

    /**
     * @param string $outMerchantOrderNo
     * @return MerchScanPayRequest
     */
    public function setOutMerchantOrderNo(string $outMerchantOrderNo): MerchScanPayRequest
    {
        $this->outMerchantOrderNo = trim($outMerchantOrderNo);
        return $this;
    }

    /**
     * @param string $isNeedShare
     * @return MerchScanPayRequest
     */
    public function setIsNeedShare(string $isNeedShare): MerchScanPayRequest
    {
        $this->isNeedShare = trim($isNeedShare);
        return $this;
    }

    /**
     * @param string $remark
     * @return MerchScanPayRequest
     */
    public function setRemark(string $remark): MerchScanPayRequest
    {
        $this->remark = trim($remark);
        return $this;
    }

    /**
     * @param string $notify_url
     * @return MerchScanPayRequest
     */
    public function setNotifyUrl(string $notify_url): MerchScanPayRequest
    {
        $this->notify_url = trim($notify_url);
        return $this;
    }

}
