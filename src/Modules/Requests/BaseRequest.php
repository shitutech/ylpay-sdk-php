<?php

namespace Shitutech\YlPay\Modules\Requests;

abstract class BaseRequest
{
    // 通用参数 START

    /**
     * @var string 接口版本号，当前默认为：1.0
     */
    protected $api_version = "1.0";

    /**
     * @var string 渠道
     */
    protected $channel = "YLSDK";

    /**
     * @var string 设备厂商的 SN 号
     */
    protected $sn = '';

    /**
     * @var string 随机字符串，由26个大小写字母和0-9 十个数字组成的 不定长唯一字符串
     */
    protected $nonceStr = '';

    /**
     * @var string 请求时间，从 Unix 纪元（格林威治时间 1970 年 1 月 1 日 00:00:00）到当前时间的秒数
     */
    protected $timestamp = '';

    /**
     * @var string 基站信息或收银终端公网IP
     */
    protected $bi = '';

    /**
     * @var string 经度，收银终端具备GPS芯片或可获取到经纬度信息时需要上传
     */
    protected $longitude = '';

    /**
     * @var string 纬度，收银终端具备GPS芯片或可获取到经纬度信息时需要上传
     */
    protected $latitude = '';

    /**
     * @var string 签名类型（务必大写），支持 MD5、HMAC-SHA256；默认 为 MD5
     */
    protected $signType = 'HMAC-SHA256';

    /**
     * @var string 签名（签名key请咨询BD或技术支持）
     */
    // protected $sign = '';

    // 通用参数 END

    /**
     * 大部分接口要用，在基类实现；为空时可忽略
     * @var string 翼龙商户号
     */
    protected $mchid = '';

    private const IGNORE_EMPTY_COMMON_PARAMS = [
        'api_version', 'sn', 'bi', 'longitude', 'latitude', 'signType',
        'mchid',
    ];

    /**
     * 返回请求的 API 地址
     *
     * @return string
     */
    public abstract function getApiPath(): string;

    /**
     * @param bool $toJson
     * @return array|false|string
     */
    public function fetchBizItems(bool $toJson = false)
    {
        $bizData = [];

        $clzProperties = get_object_vars($this);

        $ignoreEmptyProperties = self::IGNORE_EMPTY_COMMON_PARAMS;
        if (
            defined('static::IGNORE_EMPTY_PROPERTIES') &&
            static::IGNORE_EMPTY_PROPERTIES && is_array(static::IGNORE_EMPTY_PROPERTIES)
        ) {
            $ignoreEmptyProperties = array_merge($ignoreEmptyProperties, static::IGNORE_EMPTY_PROPERTIES);
        }

        foreach ($clzProperties as $property => $propertyValue) {
            if (in_array($property, $ignoreEmptyProperties) && trim($propertyValue) === '') {
                continue;
            }

            $bizData[$property] = $propertyValue;
        }

        return $toJson ? json_encode($bizData) : $bizData;
    }

    /**
     * @param string $mchId
     * @return BaseRequest
     */
    public function setMchId(string $mchId): self
    {
        $this->mchid = trim($mchId);

        return $this;
    }

    /**
     * @param string $name
     * @param $value
     * @return void
     */
    public function __set(string $name, $value)
    {
        if (property_exists($this, $name)) {
            $this->{$name} = $value;
        }
    }
}
