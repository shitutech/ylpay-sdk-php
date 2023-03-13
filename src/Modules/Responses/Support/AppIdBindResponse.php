<?php

namespace Shitutech\YlPay\Modules\Responses\Support;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

class AppIdBindResponse extends BaseResponse
{
    /**
     * @var array 详情数据
     */
    protected $data = [];

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

}