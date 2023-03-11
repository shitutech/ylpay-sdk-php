<?php

namespace Shitutech\YlPay;

final class PayConfig
{
    private $mchId = '';
    private $signKey = '';

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    public static function getInstance(): self
    {
        static $objSelf = null;

        if ($objSelf === null) {
            $objSelf = new self();
        }

        return $objSelf;
    }

    /**
     * @return string
     */
    public function getMchId(): string
    {
        return $this->mchId;
    }

    /**
     * @param string $mchId
     * @return PayConfig
     */
    public function setMchId(string $mchId): PayConfig
    {
        $this->mchId = trim($mchId);
        return $this;
    }

    /**
     * @return string
     */
    public function getSignKey(): string
    {
        return $this->signKey;
    }

    /**
     * @param string $signKey
     * @return PayConfig
     */
    public function setSignKey(string $signKey): PayConfig
    {
        $this->signKey = trim($signKey);
        return $this;
    }

}
