<?php

namespace Shitutech\YlPay\Modules\Requests\Payment;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class BarcodePayRequest extends BaseRequest
{
    /**
     * @var string 营业员登录Token
     */
    protected $token = '';

    /**
     * @var string 支付条码
     */
    protected $userCode = '';

    /**
     * @var string 订单金额（单位：元；最多两位小数）
     */
    protected $totalFee = '';

    /**
     * @var string 外部商户订单号（建议上传）
     */

    protected $outMerchantOrderNo = '';

    /**
     * @var string 是否为分账订单(详见下面说明)
     */
    protected $isNeedShare = '';

    protected const IGNORE_EMPTY_PROPERTIES = ['outMerchantOrderNo', 'isNeedShare',];

    public function getApiPath(): string
    {
        return '/merchant/pay/barcode_pay';
    }

    /**
     * @param string $token
     * @return BarcodePayRequest
     */
    public function setToken(string $token): BarcodePayRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $userCode
     * @return BarcodePayRequest
     */
    public function setUserCode(string $userCode): BarcodePayRequest
    {
        $this->userCode = trim($userCode);
        return $this;
    }

    /**
     * @param string $totalFee
     * @return BarcodePayRequest
     */
    public function setTotalFee(string $totalFee): BarcodePayRequest
    {
        $this->totalFee = trim($totalFee);
        return $this;
    }

    /**
     * @param string $outMerchantOrderNo
     * @return BarcodePayRequest
     */
    public function setOutMerchantOrderNo(string $outMerchantOrderNo): BarcodePayRequest
    {
        $this->outMerchantOrderNo = trim($outMerchantOrderNo);
        return $this;
    }

    /**
     * @param string $isNeedShare 1 商户自主分账的交易 2 翼龙支付系统自动分账的交易 3 翼龙易分账交易
     * @return BarcodePayRequest
     */
    public function setIsNeedShare(string $isNeedShare): BarcodePayRequest
    {
        $this->isNeedShare = trim($isNeedShare);
        return $this;
    }

}
