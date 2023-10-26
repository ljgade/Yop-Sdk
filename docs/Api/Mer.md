# Yeepay\Yop\Sdk\Mer

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authStateQueryV2**](Mer.md#authStateQueryV2) | **GET** /rest/v2.0/mer/auth/state/query | 商户授权状态查询接口
[**merchantDisposeQuery**](Mer.md#merchantDisposeQuery) | **GET** /rest/v1.0/mer/merchant/dispose/query | 沉默商户解冻申请进度查询
[**merchantDisposeUnfreeze**](Mer.md#merchantDisposeUnfreeze) | **POST** /rest/v1.0/mer/merchant/dispose/unfreeze | 沉默商户解冻申请
[**merchantInfoModify**](Mer.md#merchantInfoModify) | **POST** /rest/v1.0/mer/merchant/info/modify | 商户信息变更
[**merchantSupplementQualificationQuery**](Mer.md#merchantSupplementQualificationQuery) | **GET** /rest/v1.0/mer/merchant/supplement/qualification/query | 后补资质查询
[**merchantSupplementQualificationSubmit**](Mer.md#merchantSupplementQualificationSubmit) | **POST** /rest/v1.0/mer/merchant/supplement/qualification/submit | 后补资质提交
[**merchantWechatauthCancel**](Mer.md#merchantWechatauthCancel) | **POST** /rest/v1.0/mer/merchant/wechatauth/cancel | 撤销微信实名认证申请单
[**merchantWechatauthQuery**](Mer.md#merchantWechatauthQuery) | **GET** /rest/v1.0/mer/merchant/wechatauth/query | 查询微信实名认证状态
[**notifyRepeatV2**](Mer.md#notifyRepeatV2) | **POST** /rest/v2.0/mer/notify/repeat | 重复获取(短验/邮件/电子签章)
[**productFeeModifyV2**](Mer.md#productFeeModifyV2) | **POST** /rest/v2.0/mer/product/fee/modify | 商户产品变更
[**productFeeQueryV2**](Mer.md#productFeeQueryV2) | **GET** /rest/v2.0/mer/product/fee/query | 商户产品费率查询
[**productIncrementSettleOpenV2**](Mer.md#productIncrementSettleOpenV2) | **POST** /rest/v2.0/mer/product/increment-settle/open | 增值结算产品开通
[**productModifyQueryV2**](Mer.md#productModifyQueryV2) | **GET** /rest/v2.0/mer/product/modify/query | 商户产品变更进度查询接口
[**registerQueryV2**](Mer.md#registerQueryV2) | **GET** /rest/v2.0/mer/register/query | 商户入网进度查询接口
[**registerSaasIndexV2**](Mer.md#registerSaasIndexV2) | **POST** /rest/v2.0/mer/register/saas/index | 特约商户H5页面入网（小微）
[**registerSaasMerchantV2**](Mer.md#registerSaasMerchantV2) | **POST** /rest/v2.0/mer/register/saas/merchant | 特约商户入网(企业/个体)
[**registerSaasMicroV2**](Mer.md#registerSaasMicroV2) | **POST** /rest/v2.0/mer/register/saas/micro | 特约商户入网(小微)
[**registerSaasWebIndexV2**](Mer.md#registerSaasWebIndexV2) | **POST** /rest/v2.0/mer/register/saas/web/index | 特约商户WEB页面入网（企业/个体）


# **authStateQueryV2**
AuthStateQueryV2Response authStateQueryV2(AuthStateQueryV2Request request)

商户授权状态查询接口

商户授权状态查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryV2Request();
$request->setMerchantNo("merchantNo_example");
$request->setReportMerchantNo("reportMerchantNo_example");
$request->setFeeType("feeType_example");

try {
    $response = $api_client->authStateQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->authStateQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**| 易宝商户编号 |
 **reportMerchantNo** | **string**| 报备商户编号 | [optional]
 **feeType** | **string**| 可选项如下：&lt;br&gt;GONGYI:微信公益&lt;br&gt;GONGJIAO:微信公缴&lt;br&gt;XIANXIA:微信线下&lt;br&gt;BAOXIAN:微信保险&lt;br&gt;XIANSHANG:微信线上&lt;br&gt;OLDLVZHOU:微信老绿洲&lt;br&gt;LVZHOU:微信绿洲&lt;br&gt;XIAOYUAN:微信校园&lt;br&gt;ALIPUTONG:支付宝普通 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryV2IdentityAuthStateResDtoResult**](../Model/AuthStateQueryV2IdentityAuthStateResDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantDisposeQuery**
MerchantDisposeQueryResponse merchantDisposeQuery(MerchantDisposeQueryRequest request)

沉默商户解冻申请进度查询

查询沉默商户解冻申请单进度

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setApplicationNo("applicationNo_example");

try {
    $response = $api_client->merchantDisposeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantDisposeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 请求号与工单号二选一必填 | [optional]
 **applicationNo** | **string**| 请求号与工单号二选一必填 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult**](../Model/MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantDisposeUnfreeze**
MerchantDisposeUnfreezeResponse merchantDisposeUnfreeze(MerchantDisposeUnfreezeRequest request)

沉默商户解冻申请

支持自助发起沉默商户解冻

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeUnfreezeRequest();
$request->setRequestNo("requestNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merchantDisposeUnfreeze($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantDisposeUnfreeze: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeUnfreezeMerchantDisposeRespDtoResult**](../Model/MerchantDisposeUnfreezeMerchantDisposeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantInfoModify**
MerchantInfoModifyResponse merchantInfoModify(MerchantInfoModifyRequest request)

商户信息变更

商户信息变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyRequest();
$request->setRequestNo("a04cf8bded8b4413a43ab455b21eedcd");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setMerchantSubjectInfo("{ \"licenceUrl\":\"商户证件照片地址\", \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\", \"shortName\":\"商户简称\" }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"ID_CARD\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件人像面照片地址\", \"legalLicenceBackUrl\":\"法人证件非人像面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setAccountInfo("{\"bankAccountName\":\"开户名称\",\"bankAccountType\":\"银行账户类型\",\"bankAccountNo\":\"银行账户号码\",\"bankCardTag\":\"[\\\"SETTLEMENT\\\",\\\"WITHDRAW\\\"]\",\"authorizationUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"bankCode\":\"开户总行编码\"}");
$request->setBankToken("{ \"deviceIp\":\"交易ip\", \"token\":\"交易口令\"}");

try {
    $response = $api_client->merchantInfoModify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantInfoModify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **accountInfo** | **string**|  | [optional]
 **bankToken** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantInfoModifyMerchantInfoModifyRespDTOResult**](../Model/MerchantInfoModifyMerchantInfoModifyRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantSupplementQualificationQuery**
MerchantSupplementQualificationQueryResponse merchantSupplementQualificationQuery(MerchantSupplementQualificationQueryRequest request)

后补资质查询

后补资质查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationQueryRequest();
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->merchantSupplementQualificationQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantSupplementQualificationQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult**](../Model/MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantSupplementQualificationSubmit**
MerchantSupplementQualificationSubmitResponse merchantSupplementQualificationSubmit(MerchantSupplementQualificationSubmitRequest request)

后补资质提交

后补资质提交

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationSubmitRequest();
$request->setMerchantNo("1234567890");
$request->setQualifications("[   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_FRONT_URL\"   },   {     \"value\": \"https://staticres.yeepay.com/xxx.文件后缀\",     \"key\": \"LEGAL_LICENCE_BACK_URL\"   } ]");

try {
    $response = $api_client->merchantSupplementQualificationSubmit($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantSupplementQualificationSubmit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **qualifications** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationSubmitSubmitMopQuaInfoRespDTOResult**](../Model/MerchantSupplementQualificationSubmitSubmitMopQuaInfoRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthCancel**
MerchantWechatauthCancelResponse merchantWechatauthCancel(MerchantWechatauthCancelRequest request)

撤销微信实名认证申请单

撤销微信实名认证申请单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelRequest();
$request->setApplymentId("applymentId_example");
$request->setRequestNo("requestNo_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");
$request->setChannelId("channelId_example");

try {
    $response = $api_client->merchantWechatauthCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **subMerchantNo** | **string**|  | [optional]
 **reportFee** | **string**|  | [optional]
 **channelId** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelApplymentCancelRespDtoResult**](../Model/MerchantWechatauthCancelApplymentCancelRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **merchantWechatauthQuery**
MerchantWechatauthQueryResponse merchantWechatauthQuery(MerchantWechatauthQueryRequest request)

查询微信实名认证状态

查询微信实名认证状态

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryRequest();
$request->setApplymentId("applymentId_example");
$request->setSubMerchantNo("subMerchantNo_example");
$request->setReportFee("reportFee_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->merchantWechatauthQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->merchantWechatauthQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **applymentId** | **string**|  |
 **subMerchantNo** | **string**|  |
 **reportFee** | **string**| GONGYI 微信公益&lt;br&gt;GONGJIAO 微信公缴&lt;br&gt;XIANXIA 微信线下&lt;br&gt;BAOXIAN 微信保险&lt;br&gt;XIANSHANG 微信线上&lt;br&gt;OLDLVZHOU 微信老绿洲&lt;br&gt;LVZHOU 微信绿洲&lt;br&gt;XIAOYUAN 微信校园&lt;br&gt;JIEDAIFENLI 微信借贷分离&lt;br&gt;SHUYU 微信数娱 |
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryQueryCertificateResultRespDtoResult**](../Model/MerchantWechatauthQueryQueryCertificateResultRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **notifyRepeatV2**
NotifyRepeatV2Response notifyRepeatV2(NotifyRepeatV2Request request)

重复获取(短验/邮件/电子签章)

重复获取(短验/邮件/电子签章)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatV2Request();
$request->setRequestNo("requestNo_example");
$request->setApplicationNo("applicationNo_example");
$request->setType("type_example");

try {
    $response = $api_client->notifyRepeatV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->notifyRepeatV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **applicationNo** | **string**|  | [optional]
 **type** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\NotifyRepeatV2MerchantNetInRepeatNotifyRespDtoResult**](../Model/NotifyRepeatV2MerchantNetInRepeatNotifyRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productFeeModifyV2**
ProductFeeModifyV2Response productFeeModifyV2(ProductFeeModifyV2Request request)

商户产品变更

商户产品变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyV2Request();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\",\"undertaker\":\"PLATFORM_MERCHANT\",\"paymentMethod\":\"REAL_TIME\"}]");
$request->setProductQualificationInfo("{\"mcc\":\"7829\",\"paymentScene\":\"RLZYFW\",\"systemScreenshotUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"specialPermitProcessUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\",\"agreementPhotoUrl\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setFunctionService("[\"SHARE\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");

try {
    $response = $api_client->productFeeModifyV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productFeeModifyV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyV2ModifyProductFeeRespDtoResult**](../Model/ProductFeeModifyV2ModifyProductFeeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productFeeQueryV2**
ProductFeeQueryV2Response productFeeQueryV2(ProductFeeQueryV2Request request)

商户产品费率查询

商户产品费率查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setProductCode("MERCHANT_SCAN_ALIPAY_OFFLINE");

try {
    $response = $api_client->productFeeQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productFeeQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 如果为平台商拓展商户（入驻商户），此为平台商商户编号；&lt;br&gt;如为saas服务商拓展商户（平台商/标准商户），此为saas服务商商户编号。 |
 **merchantNo** | **string**| 需要查询产品的商户编号 |
 **productCode** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeQueryV2QueryProductFeeRespDtoResult**](../Model/ProductFeeQueryV2QueryProductFeeRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productIncrementSettleOpenV2**
ProductIncrementSettleOpenV2Response productIncrementSettleOpenV2(ProductIncrementSettleOpenV2Request request)

增值结算产品开通

增值结算产品开通

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenV2Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setProductInfo("[{\"productCode\":\"S0\",\"rateType\":\"FIXED_MIX_PERCENT\",\"percentRate\":\"0.1\",\"fixedRate\":\"111\"}]");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->productIncrementSettleOpenV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productIncrementSettleOpenV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenV2AddIncrementSettleProductRespDtoResult**](../Model/ProductIncrementSettleOpenV2AddIncrementSettleProductRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **productModifyQueryV2**
ProductModifyQueryV2Response productModifyQueryV2(ProductModifyQueryV2Request request)

商户产品变更进度查询接口

商户产品变更进度查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\ProductModifyQueryV2Request();
$request->setRequestNo("0adc579914d541f8baa3be75387846f1");

try {
    $response = $api_client->productModifyQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->productModifyQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult**](../Model/ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerQueryV2**
RegisterQueryV2Response registerQueryV2(RegisterQueryV2Request request)

商户入网进度查询接口

商户入网进度查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryV2Request();
$request->setRequestNo("0adc579914d541f8baa3be75387846f1");

try {
    $response = $api_client->registerQueryV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerQueryV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  |

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryV2NetInProgressQueryRespDtoResult**](../Model/RegisterQueryV2NetInProgressQueryRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasIndexV2**
RegisterSaasIndexV2Response registerSaasIndexV2(RegisterSaasIndexV2Request request)

特约商户H5页面入网（小微）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasIndexV2Request();
$request->setRequestNo("示例值：REQ6437657876");
$request->setParentMerchantNo("示例值：10080000001");
$request->setNotifyUrl("示例值：http://www.shili111.com");
$request->setReturnUrl("示例值：http://www.shili.com");
$request->setMobile("159****8288");
$request->setName("示例值：张三");
$request->setIdCardNo("示例值：430422199001236704");
$request->setWalletUserNo("示例值：User89849");

try {
    $response = $api_client->registerSaasIndexV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasIndexV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **idCardNo** | **string**|  | [optional]
 **walletUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasIndexV2UserPreRegisterRespDtoResult**](../Model/RegisterSaasIndexV2UserPreRegisterRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasMerchantV2**
RegisterSaasMerchantV2Response registerSaasMerchantV2(RegisterSaasMerchantV2Request request)

特约商户入网(企业/个体)

特约商户入网(企业/个体)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMerchantV2Request();
$request->setRequestNo("YBRWQQH20210622XXXXXX");
$request->setBusinessRole("ORDINARY_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantSubjectInfo("{         \"licenceUrl\":\"商户证件照片地址\",         \"signName\":\"商户签约名\",         \"signType\":\"商户签约类型\",         \"licenceNo\":\"商户证件号码\",         \"shortName\":\"商户简称\"     }");
$request->setMerchantCorporationInfo("{ \"legalName\":\"法人名称\", \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\" }");
$request->setMerchantContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"adminEmail\":\"商户后台管理员邮箱\",\"adminMobile\":\"商户后台管理员手机号\" }");
$request->setIndustryCategoryInfo("{ \"primaryIndustryCategory\":\"一级行业分类编码\", \"secondaryIndustryCategory\":\"二级行业分类编码\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setSettlementAccountInfo("{ \"settlementDirection\":\"结算方向\", \"bankCode\":\"开户总行编码\", \"bankAccountType\":\"银行账户类型\", \"bankCardNo\":\"银行账户号码\" }");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setProductQualificationInfo("{ \"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"SHARE\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");

try {
    $response = $api_client->registerSaasMerchantV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasMerchantV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **merchantContactInfo** | **string**|  | [optional]
 **industryCategoryInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **settlementAccountInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMerchantV2ContributeMerchantNetInRespDtoResult**](../Model/RegisterSaasMerchantV2ContributeMerchantNetInRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasMicroV2**
RegisterSaasMicroV2Response registerSaasMicroV2(RegisterSaasMicroV2Request request)

特约商户入网(小微)

SaaS服务商下特约商户入网(小微)

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMicroV2Request();
$request->setRequestNo("YBRWQQH20210622XXXXXX");
$request->setBusinessRole("SETTLED_MERCHANT");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantSubjectInfo("{ \"signName\":\"商户签约名\", \"shortName\":\"商户简称\" }");
$request->setBusinessAddressInfo("{ \"province\":\"经营省\", \"city\":\"经营市\", \"district\":\"经营区\", \"address\":\"经营地址\" }");
$request->setMerchantCorporationInfo("{ \"legalLicenceType\":\"法人证件类型\", \"legalLicenceNo\":\"法人证件编号\", \"legalLicenceFrontUrl\":\"法人证件正面照片地址\", \"legalLicenceBackUrl\":\"法人证件背面照片地址\",  \"mobile\":\"法人手机号\"  }");
$request->setAccountInfo("{\"bankAccountType\":\"银行账户类型\",\"bankCardNo\":\"银行账户号码\",\"bankCode\":\"开户总行编码\"}");
$request->setNotifyUrl("https://notify.merchant.com/xxx");
$request->setProductInfo("[{\"productCode\":\"MERCHANT_SCAN_ALIPAY_OFFLINE\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"},{\"productCode\":\"MERCHANT_SCAN_UNIONPAY_CREDIT\",\"rateType\":\"SINGLE_FIXED\",\"fixedRate\":\"1\"},{\"productCode\":\"T1\",\"rateType\":\"SINGLE_PERCENT\",\"percentRate\":\"0.1\"}]");
$request->setProductQualificationInfo("{\"paymentScene\": \"RLZYFW\",   \"systemScreenshotUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"specialPermitProcessUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\",   \"agreementPhotoUrl\": \"https://staticres.yeepay.com/xxx.文件后缀\" }");
$request->setFunctionService("[\"SHARE\"]");
$request->setFunctionServiceQualificationInfo("{\"shareScene\":\"FZ_FJ001\",\"shareCertificate\":\"https://staticres.yeepay.com/xxx.文件后缀\"}");

try {
    $response = $api_client->registerSaasMicroV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasMicroV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **businessRole** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantSubjectInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]
 **merchantCorporationInfo** | **string**|  | [optional]
 **accountInfo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **productInfo** | **string**|  | [optional]
 **productQualificationInfo** | **string**|  | [optional]
 **functionService** | **string**|  | [optional]
 **functionServiceQualificationInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMicroV2ContributeMicroMerchantNetInRespDtoResult**](../Model/RegisterSaasMicroV2ContributeMicroMerchantNetInRespDtoResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **registerSaasWebIndexV2**
RegisterSaasWebIndexV2Response registerSaasWebIndexV2(RegisterSaasWebIndexV2Request request)

特约商户WEB页面入网（企业/个体）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Mer\MerClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasWebIndexV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("fba1dd39fd3846b4901f5a833fa3baa3");
$request->setSignType("ENTERPRISE");
$request->setNotifyUrl("http://www.yeepay.com/merchant/notify");
$request->setReturnUrl("http://www.yeepay.com");
$request->setProductTemplateNo("CP166748***3516");
$request->setMerchantBaseInfo("{ \"signName\":\"商户签约名\", \"licenceNo\":\"商户证件号码\"}");
$request->setCorporationInfo("{ \"legalName\":\"法人名称\",  \"legalLicenceNo\":\"法人证件编号\"}");
$request->setContactInfo("{ \"contactName\":\"联系人姓名\", \"contactMobile\":\"联系人手机号\", \"contactEmail\":\"联系人邮箱\", \"contactLicenceNo\":\"联系人证件号码\" ,\"servicePhone\":\"客服电话\"}");
$request->setBusinessAddressInfo("{ \"address\":\"商户实际经营地址\"}");

try {
    $response = $api_client->registerSaasWebIndexV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MerClient->registerSaasWebIndexV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **signType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **productTemplateNo** | **string**|  | [optional]
 **merchantBaseInfo** | **string**|  | [optional]
 **corporationInfo** | **string**|  | [optional]
 **contactInfo** | **string**|  | [optional]
 **businessAddressInfo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasWebIndexV2CreateNetInUrlRespDTOResult**](../Model/RegisterSaasWebIndexV2CreateNetInUrlRespDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

