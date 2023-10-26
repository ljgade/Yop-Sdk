# Yeepay\Yop\Sdk\TelPay

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**qrcodeBatchGenerate**](TelPay.md#qrcodeBatchGenerate) | **POST** /rest/v1.0/tel-pay/qrcode/batch-generate | 批量生成二维码接口
[**qrcodeQuery**](TelPay.md#qrcodeQuery) | **GET** /rest/v1.0/tel-pay/qrcode/query | 查询二维码信息


# **qrcodeBatchGenerate**
QrcodeBatchGenerateResponse qrcodeBatchGenerate(QrcodeBatchGenerateRequest request)

批量生成二维码接口

支持商户生成易宝通台牌二维码，支持批量生成多个二维码

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TelPay\TelPayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TelPay\Model\QrcodeBatchGenerateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestId("requestId_example");
$request->setQrCodeInfo("qrCodeInfo_example");
$request->setDistrictCode("districtCode_example");

try {
    $response = $api_client->qrcodeBatchGenerate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TelPayClient->qrcodeBatchGenerate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestId** | **string**|  | [optional]
 **qrCodeInfo** | **string**|  | [optional]
 **districtCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TelPay\Model\QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult**](../Model/QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **qrcodeQuery**
QrcodeQueryResponse qrcodeQuery(QrcodeQueryRequest request)

查询二维码信息

支持查询商户下的易宝通台牌二维码信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\TelPay\TelPayClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\TelPay\Model\QrcodeQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestId("requestId_example");
$request->setPageSize(56);
$request->setPageNo(56);
$request->setQrId("qrId_example");
$request->setStartTime("startTime_example");
$request->setEndTime("endTime_example");
$request->setQrStatus("qrStatus_example");

try {
    $response = $api_client->qrcodeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling TelPayClient->qrcodeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  |
 **merchantNo** | **string**|  |
 **requestId** | **string**|  |
 **pageSize** | **int**|  |
 **pageNo** | **int**|  |
 **qrId** | **string**|  | [optional]
 **startTime** | **string**| yyyy-MM-dd HH:mm:ss | [optional]
 **endTime** | **string**| yyyy-MM-dd HH:mm:ss | [optional]
 **qrStatus** | **string**| 二维码状态&lt;br&gt;可选项如下:&lt;br&gt;INACTIVE:已关闭&lt;br&gt;ACTIVE:已开通 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\TelPay\Model\QrcodeQueryQueryQrCodeApiResponseDTOResult**](../Model/QrcodeQueryQueryQrCodeApiResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

