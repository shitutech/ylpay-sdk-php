<?php

namespace Shitutech\YlPay\Modules\Requests\Payment;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class LitePayRequest extends BaseRequest
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
     * @var string 微信小程序APPID
     */
    protected $appid = '';

    /**
     * @var string 上述微信小程序下的客户openid
     */
    protected $openid = '';

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
        return '/merchant/pay/mini_program_pay';
    }

    /**
     * @param string $token
     * @return LitePayRequest
     */
    public function setToken(string $token): LitePayRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $totalFee
     * @return LitePayRequest
     */
    public function setTotalFee(string $totalFee): LitePayRequest
    {
        $this->totalFee = trim($totalFee);
        return $this;
    }

    /**
     * @param string $appid
     * @return LitePayRequest
     */
    public function setAppid(string $appid): LitePayRequest
    {
        $this->appid = trim($appid);
        return $this;
    }

    /**
     * @param string $openid
     * @return LitePayRequest
     */
    public function setOpenid(string $openid): LitePayRequest
    {
        $this->openid = trim($openid);
        return $this;
    }

    /**
     * @param string $outMerchantOrderNo
     * @return LitePayRequest
     */
    public function setOutMerchantOrderNo(string $outMerchantOrderNo): LitePayRequest
    {
        $this->outMerchantOrderNo = trim($outMerchantOrderNo);
        return $this;
    }

    /**
     * @param string $isNeedShare
     * @return LitePayRequest
     */
    public function setIsNeedShare(string $isNeedShare): LitePayRequest
    {
        $this->isNeedShare = trim($isNeedShare);
        return $this;
    }

    /**
     * @param string $notify_url
     * @return LitePayRequest
     */
    public function setNotifyUrl(string $notify_url): LitePayRequest
    {
        $this->notify_url = trim($notify_url);
        return $this;
    }

}
