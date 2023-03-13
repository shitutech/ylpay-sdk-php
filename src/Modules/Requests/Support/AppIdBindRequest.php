<?php

namespace Shitutech\YlPay\Modules\Requests\Support;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

class AppIdBindRequest extends BaseRequest
{
    /**
     * @var string 配置类型
     */
    protected $configType = '';

    /**
     * @var string 配置的值（仅 configType 为 5 时为可选 ）
     */
    protected $configValue = '';

    /**
     * @var string 门店ID（当门店使用自己的支付配置时必传）
     */
    protected $storeId = '';

    protected const IGNORE_EMPTY_PROPERTIES = ['configValue', 'storeId',];

    /**
     * @inheritDoc
     */
    public function getApiPath(): string
    {
        return '/merchant/support/appid_bind';
    }

    /**
     * @param string $configType
     * @return AppIdBindRequest
     */
    public function setConfigType(string $configType): AppIdBindRequest
    {
        $this->configType = trim($configType);
        return $this;
    }

    /**
     * @param string $configValue
     * @return AppIdBindRequest
     */
    public function setConfigValue(string $configValue): AppIdBindRequest
    {
        $this->configValue = trim($configValue);
        return $this;
    }

    /**
     * @param string $storeId
     * @return AppIdBindRequest
     */
    public function setStoreId(string $storeId): AppIdBindRequest
    {
        $this->storeId = trim($storeId);
        return $this;
    }

}