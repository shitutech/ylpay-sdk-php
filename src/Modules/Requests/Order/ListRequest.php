<?php

namespace Shitutech\YlPay\Modules\Requests\Order;

use Shitutech\YlPay\Modules\Requests\BaseRequest;

final class ListRequest extends BaseRequest
{
    /**
     * @var string 营业员登录Token
     */
    protected $token = '';

    /**
     * @var string 订单ID偏移（兼容保留）
     */
    protected $pageSign = '';

    /**
     * @var string 页码，默认为 1
     */
    protected $pageNum = '';

    /**
     * @var string 每页记录数，默认为 10
     */
    protected $pageSize = '';

    /**
     * @var string 筛选开始时间，格式为 2021-03-01 00:00:00
     */
    protected $startDate = '';

    /**
     * @var string 筛选结束时间，格式为 2021-03-01 23:59:59
     */
    protected $endDate = '';

    /**
     * @var string 筛选支付方式
     */
    protected $payType = '';

    /**
     * @var string 筛选订单状态
     */
    protected $orderStatus = '';

    /**
     * @var string 筛选关键字（订单号关键字或订单金额）
     */
    protected $keyword = '';

    protected const IGNORE_EMPTY_PROPERTIES = [
        'pageSign', 'pageNum', 'pageSize', 'startDate', 'endDate',
        'payType', 'orderStatus', 'keyword',
    ];

    public function getApiPath(): string
    {
        return '/merchant/order/order_list';
    }

    /**
     * @param string $token
     * @return ListRequest
     */
    public function setToken(string $token): ListRequest
    {
        $this->token = trim($token);
        return $this;
    }

    /**
     * @param string $pageSign
     * @return ListRequest
     */
    public function setPageSign(string $pageSign): ListRequest
    {
        $this->pageSign = trim($pageSign);
        return $this;
    }

    /**
     * @param string $pageNum
     * @return ListRequest
     */
    public function setPageNum(string $pageNum): ListRequest
    {
        $this->pageNum = trim($pageNum);
        return $this;
    }

    /**
     * @param string $pageSize
     * @return ListRequest
     */
    public function setPageSize(string $pageSize): ListRequest
    {
        $this->pageSize = trim($pageSize);
        return $this;
    }

    /**
     * @param string $startDate
     * @return ListRequest
     */
    public function setStartDate(string $startDate): ListRequest
    {
        $this->startDate = trim($startDate);
        return $this;
    }

    /**
     * @param string $endDate
     * @return ListRequest
     */
    public function setEndDate(string $endDate): ListRequest
    {
        $this->endDate = trim($endDate);
        return $this;
    }

    /**
     * @param string $payType
     * @return ListRequest
     */
    public function setPayType(string $payType): ListRequest
    {
        $this->payType = trim($payType);
        return $this;
    }

    /**
     * @param string $orderStatus
     * @return ListRequest
     */
    public function setOrderStatus(string $orderStatus): ListRequest
    {
        $this->orderStatus = trim($orderStatus);
        return $this;
    }

    /**
     * @param string $keyword
     * @return ListRequest
     */
    public function setKeyword(string $keyword): ListRequest
    {
        $this->keyword = trim($keyword);
        return $this;
    }

}
