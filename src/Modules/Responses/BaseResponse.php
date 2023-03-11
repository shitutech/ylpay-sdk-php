<?php

namespace Shitutech\YlPay\Modules\Responses;

abstract class BaseResponse
{
    /**
     * @var string 响应状态 SUCCESS 为成功，否则为失败
     */
    protected $status = 'FAIL';

    /**
     * @var string 错误代码对应的数字代码
     */
    // protected $errCodeNum = '';

    /**
     * @var string 错误代码
     */
    // protected $errCode = '';

    /**
     * @var string 错误消息
     */
    // protected $errMsg = '';

    /**
     * @var string|array 必要时会返回该字段，一般不返回
     */
    // protected $data = '';

    /**
     * 响应是否成功
     *
     * @return bool
     */
    public function isSuccess(): bool
    {
        return strtoupper(trim($this->status)) == 'SUCCESS';
    }

    /**
     * 是否将 data 转为解析为类属性
     *
     * @return bool
     */
    public function isD2P(): bool
    {
        return false;
    }

    /**
     * @param array $resultData
     * @return void
     */
    public function setProperty(array $resultData)
    {
        foreach ($resultData as $name => $value) {
            if (property_exists($this, $name)) {
                $pType = gettype($this->{$name});
                switch ($pType) {
                    case 'boolean':
                        $value = (boolean)$value;
                        break;
                    case 'array':
                        $value = (array)$value;
                        break;
                    case 'NULL':
                    case 'object':
                        break;
                    case 'integer':
                        $value = intval($value);
                        break;
                    case 'float':
                    case 'double':
                        $value = floatval($value);
                        break;
                    case 'string':
                    default:
                        $value = $value === null ? '' : trim($value);
                        break;
                }

                $this->{$name} = $value;
            }
        }
    }

    public function toArray(): array
    {
        $bizData = [];

        $clzProperties = get_object_vars($this);

        foreach ($clzProperties as $property => $propertyValue) {
            $bizData[$property] = $propertyValue;
        }

        return $bizData;
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}
