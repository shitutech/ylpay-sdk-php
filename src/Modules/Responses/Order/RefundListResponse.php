<?php

namespace Shitutech\YlPay\Modules\Responses\Order;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class RefundListResponse extends BaseResponse
{
    /**
     * @var array 记录
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
