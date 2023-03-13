# 介绍

翼龙支付 API PHP SDK

JAVA SDK 请参考： https://github.com/shitutech/ylpay-sdk-java

# 使用方法

## 配置仓库

在项目的 ``composer.json`` 内新增仓库配置

```json
{
  "minimum-stability": "dev",
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/shitutech/ylpay-sdk-php.git"
    }
  ]
}
```

执行安装：

```shell
composer.phar require shitutech/ylpay
```

## 调用

```php
use Shitutech\YlPay\ClientRequest;
use Shitutech\YlPay\ClientResponse;
use Shitutech\YlPay\Modules\Requests\Clerk\LoginRequest;
use Shitutech\YlPay\Modules\Responses\Clerk\LoginResponse;
use Shitutech\YlPay\PayConfig;

PayConfig::getInstance()->setMchId("*******")->setSignKey('********');

$objReq = new LoginRequest();
$objReq->setMchId(PayConfig::getInstance()->getMchId())
    ->setAccount('********')
    ->setPwd('******');

try {
    $respData = (new ClientRequest($objReq))->send(PayConfig::getInstance()->getSignKey());
    /**
     * @var $objResp LoginResponse
     */
    $objResp = (new ClientResponse(new LoginResponse(), $respData))->fetchResult();
    var_dump($objResp->toArray());
} catch (\Throwable $e) {
    var_dump(['code' => $e->getCode(), 'msg' => $e->getMessage(), 'fLine' => $e->getFile() . ":" . $e->getLine(),]);
}

```

# 接口

| API       | 请求类                               | 响应类                                |
|-----------|-----------------------------------|------------------------------------|
| 营业员登录     | LoginRequest::class               | LoginResponse::class               |
| B扫C支付     | BarcodePayRequest::class          | BarcodePayResponse::class          |
| C扫B支付     | ScanPayRequest::class             | ScanPayResponse::class             |
| 商户自主C扫B支付 | MerchScanPayRequest::class        | MerchScanPayResponse::class        |
| 微信小程序支付   | LitePayRequest::class             | LitePayResponse::class             |
| 支付宝动码     | DynamicPayRequest::class          | DynamicPayResponse::class          |
| 订单轮询      | PollingOrderRequest::class        | PollingOrderResponse::class        |
| 订单退款      | RefundRequest::class              | RefundResponse::class              |
| 订单撤销      | CancelRequest::class              | CancelResponse::class              |
| 分账回退成功通知  | ShareRollbackNotifyRequest::class | ShareRollbackNotifyResponse::class |
