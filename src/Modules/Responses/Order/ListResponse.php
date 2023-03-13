<?php

namespace Shitutech\YlPay\Modules\Responses\Order;

use Shitutech\YlPay\Modules\Responses\BaseResponse;

final class ListResponse extends BaseResponse
{
    /**
     * @var string 当前页记录数
     */
    protected $itemCount = '';

    /**
     * @var string 总页数
     */
    protected $pageCount = '';

    /**
     * @var array 记录
     */
    protected $data = [];

    /**
     * @var string BASE64编码的订单ID偏移起始值，可作为下一页参数传递
     */
    protected $pageSign = '';

    /**
     * @return string
     */
    public function getItemCount(): string
    {
        return $this->itemCount;
    }

    /**
     * @return string
     */
    public function getPageCount(): string
    {
        return $this->pageCount;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getPageSign(): string
    {
        return $this->pageSign;
    }
    
}
