# Yeepay\Yop\Sdk\Cnppay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**installmentPayRequest**](Cnppay.md#installmentPayRequest) | **POST** /rest/v1.0/cnppay/installment/pay/request | 分期支付统一下单
[**installmentQuerybankcfg**](Cnppay.md#installmentQuerybankcfg) | **GET** /rest/v1.0/cnppay/installment/querybankcfg | 分期支付商户支持银行信息查询


# **installmentPayRequest**
InstallmentPayRequestResponse installmentPayRequest(InstallmentPayRequestRequest request)

分期支付统一下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentPayRequestRequest();
$request->setParentMerchantNo("10012345677");
$request->setMerchantNo("10012345677");
$request->setOrderAmount(300.01);
$request->setOrderId("221007104428249784269");
$request->setFundProcessType("fundProcessType_example");
$request->setBankId("bankId_example");
$request->setExpireTime("expireTime_example");
$request->setGoodsName("goodsName_example");
$request->setNumOfInstallment(56);
$request->setRiskInfo("riskInfo_example");
$request->setRedirectUrl("redirectUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setCsUrl("csUrl_example");
$request->setMemo("memo_example");

try {
    $response = $api_client->installmentPayRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->installmentPayRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **orderId** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **bankId** | **string**|  | [optional]
 **expireTime** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **numOfInstallment** | **int**|  | [optional]
 **riskInfo** | **string**|  | [optional]
 **redirectUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentPayRequestInstallmentPayResponseDTOResult**](../Model/InstallmentPayRequestInstallmentPayResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **installmentQuerybankcfg**
InstallmentQuerybankcfgResponse installmentQuerybankcfg(InstallmentQuerybankcfgRequest request)

分期支付商户支持银行信息查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Cnppay\CnppayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentQuerybankcfgRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("10012345677");

try {
    $response = $api_client->installmentQuerybankcfg($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling CnppayClient->installmentQuerybankcfg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;*标准商户收付款方案中此参数与收款商户编号一致；&lt;br&gt;*平台商户收付款方案中此参数为平台商商户编号；&lt;br&gt;*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编。 |
 **merchantNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentQuerybankcfgInstallmentBankCfgResponseDTOResult**](../Model/InstallmentQuerybankcfgInstallmentBankCfgResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

