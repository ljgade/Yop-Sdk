# Yeepay\Yop\Sdk\Netpay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**order**](Netpay.md#order) | **POST** /rest/v1.0/netpay/order | 网银支付
[**orderSdkPayOrder**](Netpay.md#orderSdkPayOrder) | **POST** /rest/v1.0/netpay/order/sdk-pay-order | 网银大额支付


# **order**
OrderResponse order(OrderRequest request)

网银支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Netpay\NetpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Netpay\Model\OrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount(1.2);
$request->setExpiredTime("2023-10-26 09:44:02");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("fundProcessType_example");
$request->setCardType("cardType_example");
$request->setBankAccountType("bankAccountType_example");
$request->setBankCode("bankCode_example");
$request->setTerminalType("terminalType_example");
$request->setPayerIp("payerIp_example");
$request->setCsNotifyUrl("csNotifyUrl_example");
$request->setBusinessInfo("businessInfo_example");
$request->setReturnUrl("returnUrl_example");
$request->setOrderType("orderType_example");
$request->setPayerAccountName("payerAccountName_example");
$request->setPayerAccountNo("payerAccountNo_example");

try {
    $response = $api_client->order($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NetpayClient->order: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **payerIp** | **string**|  | [optional]
 **csNotifyUrl** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **orderType** | **string**|  | [optional]
 **payerAccountName** | **string**|  | [optional]
 **payerAccountNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Netpay\Model\OrderOrderResponseDTOResult**](../Model/OrderOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **orderSdkPayOrder**
OrderSdkPayOrderResponse orderSdkPayOrder(OrderSdkPayOrderRequest request)

网银大额支付

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Netpay\NetpayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Netpay\Model\OrderSdkPayOrderRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount(1.2);
$request->setExpiredTime("2023-10-26 09:44:02");
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("REAL_TIME");
$request->setCardType("cardType_example");
$request->setBankAccountType("bankAccountType_example");
$request->setBankCode("bankCode_example");
$request->setTerminalType("terminalType_example");
$request->setPayerIp("payerIp_example");
$request->setCsUrl("csUrl_example");
$request->setBusinessInfo("businessInfo_example");
$request->setRedirectUrl("redirectUrl_example");

try {
    $response = $api_client->orderSdkPayOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling NetpayClient->orderSdkPayOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **cardType** | **string**|  | [optional]
 **bankAccountType** | **string**|  | [optional]
 **bankCode** | **string**|  | [optional]
 **terminalType** | **string**|  | [optional]
 **payerIp** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **businessInfo** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Netpay\Model\OrderSdkPayOrderSdkOrderResponseDTOResult**](../Model/OrderSdkPayOrderSdkOrderResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

