<?php

namespace Shitutech\YlPay\Helpers;

final class CallbackHelper
{
    public static function calculateSign(array $params, string $signKey = 'orderSelfNotifyKey'): string
    {
        $signStr = '';

        $params['key'] = $signKey;

        ksort($params);

        foreach ($params as $key => $val) {
            if ($key == 'sign') {
                continue;
            }

            if ($val === '' || $val === null || is_array($val)) {
                continue;
            }

            $signStr .= ($signStr ? '&' : '') . "{$key}={$val}";
        }

        return strtoupper(md5($signStr));
    }

    public static function checkSign(array $params, string $sign, string $signKey = 'orderSelfNotifyKey'): bool
    {
        return self::calculateSign($params, $signKey) == $sign;
    }
}
