<?php

namespace Shitutech\YlPay\Modules\Responses\Clerk;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class LoginResponse extends BaseResponse
{
    /**
     * @var string 营业员登录 token(默认为不变)
     */
    protected $token = '';

    /**
     * @var int 所属门店ID
     */
    protected $storeId = 0;

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
     * @var string 所属门店Code（Since v2022.09.01.0）
     */
    protected $storeCode = '';

    /**
     * @var string 营业员名称
     */
    protected $operatorName = '';

    /**
     * @var string 营业员编号
     */
    protected $number = '';

    /**
     * @return string
     */
    public function getToken(): string
    {
        return $this->token;
    }

    /**
     * @return int
     */
    public function getStoreId(): int
    {
        return $this->storeId;
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
    public function getStoreCode(): string
    {
        return $this->storeCode;
    }

    /**
     * @return string
     */
    public function getOperatorName(): string
    {
        return $this->operatorName;
    }

    /**
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }
}
