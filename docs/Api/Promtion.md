# Yeepay\Yop\Sdk\Promtion

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activityListQuery**](Promtion.md#activityListQuery) | **POST** /rest/v1.0/promtion/activity/list-query | 营销活动列表查询
[**addRights**](Promtion.md#addRights) | **POST** /rest/v1.0/promtion/add-rights | 新增权益
[**add_rights**](Promtion.md#add_rights) | **POST** /rest/v1.0/promtion/add-rights | 新增权益
[**couponApply**](Promtion.md#couponApply) | **POST** /rest/v1.0/promtion/coupon/apply | 优惠券发放接口
[**couponListQuery**](Promtion.md#couponListQuery) | **POST** /rest/v1.0/promtion/coupon/list-query | 优惠券查询接口
[**create_rights_qrcode_adapter**](Promtion.md#create_rights_qrcode_adapter) | **POST** /rest/v1.0/promtion/rights/create-qrcode | 生成权益二维码信息
[**frozen_rights**](Promtion.md#frozen_rights) | **POST** /rest/v1.0/promtion/rights/frozen-rights | 权益冻结
[**pointCreate**](Promtion.md#pointCreate) | **POST** /rest/v1.0/promtion/point/create | 营销积分账户开立
[**pointOperate**](Promtion.md#pointOperate) | **POST** /rest/v1.0/promtion/point/operate | 营销账户积分变更
[**pointQuery**](Promtion.md#pointQuery) | **GET** /rest/v1.0/promtion/point/query | 营销账户积分查询
[**query_consume_record_adapter**](Promtion.md#query_consume_record_adapter) | **GET** /rest/v1.0/promtion/rights/query-consume-records | 查询核销记录
[**query_rights**](Promtion.md#query_rights) | **GET** /rest/v1.0/promtion/rights/query-rights | 查询权益列表
[**rightsCreateQrcode**](Promtion.md#rightsCreateQrcode) | **POST** /rest/v1.0/promtion/rights/create-qrcode | 生成权益二维码信息
[**rightsFrozenRights**](Promtion.md#rightsFrozenRights) | **POST** /rest/v1.0/promtion/rights/frozen-rights | 权益冻结
[**rightsQueryConsumeRecords**](Promtion.md#rightsQueryConsumeRecords) | **GET** /rest/v1.0/promtion/rights/query-consume-records | 查询核销记录
[**rightsQueryRights**](Promtion.md#rightsQueryRights) | **GET** /rest/v1.0/promtion/rights/query-rights | 查询权益列表
[**rightsTransfer**](Promtion.md#rightsTransfer) | **POST** /rest/v1.0/promtion/rights-transfer | 权益转移
[**rights_transfer**](Promtion.md#rights_transfer) | **POST** /rest/v1.0/promtion/rights-transfer | 权益转移
[**subsidyApply**](Promtion.md#subsidyApply) | **POST** /rest/v1.0/promtion/subsidy/apply | 申请营销补贴
[**subsidyBack**](Promtion.md#subsidyBack) | **POST** /rest/v1.0/promtion/subsidy/back | 申请营销补贴退回
[**subsidyBackQuery**](Promtion.md#subsidyBackQuery) | **GET** /rest/v1.0/promtion/subsidy/back/query | 查询营销补贴退回
[**subsidyQuery**](Promtion.md#subsidyQuery) | **GET** /rest/v1.0/promtion/subsidy/query | 查询营销补贴


# **activityListQuery**
ActivityListQueryResponse activityListQuery(ActivityListQueryRequest request)

营销活动列表查询

营销活动列表查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\ActivityListQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantActivityNo("merchantActivityNo_example");
$request->setMarketingNo("marketingNo_example");
$request->setActivityStatus("activityStatus_example");
$request->setPageNo(56);
$request->setPageSize(56);

try {
    $response = $api_client->activityListQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->activityListQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantActivityNo** | **string**|  | [optional]
 **marketingNo** | **string**|  | [optional]
 **activityStatus** | **string**|  | [optional]
 **pageNo** | **int**|  | [optional]
 **pageSize** | **int**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\ActivityListQueryActivityPageListQueryResponseResult**](../Model/ActivityListQueryActivityPageListQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **addRights**
AddRightsResponse addRights(AddRightsRequest request)

新增权益

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\AddRightsRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRightsCode("rightsCode_example");
$request->setStartEffectDate("startEffectDate_example");
$request->setEndEffectDate("endEffectDate_example");
$request->setBrandNo("brandNo_example");
$request->setTitle("title_example");
$request->setRuleDesc("ruleDesc_example");
$request->setPeriodType("periodType_example");
$request->setPeriod(56);
$request->setFrequency(56);
$request->setBusinessType("businessType_example");
$request->setUserNo("userNo_example");
$request->setProductNo("productNo_example");
$request->setProductName("productName_example");

try {
    $response = $api_client->addRights($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->addRights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **rightsCode** | **string**|  | [optional]
 **startEffectDate** | **string**|  | [optional]
 **endEffectDate** | **string**|  | [optional]
 **brandNo** | **string**|  | [optional]
 **title** | **string**|  | [optional]
 **ruleDesc** | **string**|  | [optional]
 **periodType** | **string**|  | [optional]
 **period** | **int**|  | [optional]
 **frequency** | **int**|  | [optional]
 **businessType** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **productNo** | **string**|  | [optional]
 **productName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\BaseResponse**](../Model/BaseResponse.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **add_rights**
AddRightsResponse add_rights(AddRightsRequest request)

新增权益

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\AddRightsRequest();
$request->setMerchantNo("merchantNo_example");
$request->setRightsCode("rightsCode_example");
$request->setStartEffectDate("startEffectDate_example");
$request->setEndEffectDate("endEffectDate_example");
$request->setBrandNo("brandNo_example");
$request->setTitle("title_example");
$request->setRuleDesc("ruleDesc_example");
$request->setPeriodType("periodType_example");
$request->setPeriod(56);
$request->setFrequency(56);
$request->setBusinessType("businessType_example");
$request->setUserNo("userNo_example");
$request->setProductNo("productNo_example");
$request->setProductName("productName_example");

try {
    $response = $api_client->add_rights($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->add_rights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **rightsCode** | **string**|  | [optional]
 **startEffectDate** | **string**|  | [optional]
 **endEffectDate** | **string**|  | [optional]
 **brandNo** | **string**|  | [optional]
 **title** | **string**|  | [optional]
 **ruleDesc** | **string**|  | [optional]
 **periodType** | **string**|  | [optional]
 **period** | **int**|  | [optional]
 **frequency** | **int**|  | [optional]
 **businessType** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **productNo** | **string**|  | [optional]
 **productName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\BaseResponse**](../Model/BaseResponse.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **couponApply**
CouponApplyResponse couponApply(CouponApplyRequest request)

优惠券发放接口

优惠券发放接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\CouponApplyRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setMerchantActivityNo("merchantActivityNo_example");
$request->setMarketingNo("marketingNo_example");

try {
    $response = $api_client->couponApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->couponApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **merchantActivityNo** | **string**|  | [optional]
 **marketingNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\CouponApplyCouponApplyResponseResult**](../Model/CouponApplyCouponApplyResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **couponListQuery**
CouponListQueryResponse couponListQuery(CouponListQueryRequest request)

优惠券查询接口

优惠券查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\CouponListQueryRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setCouponStatus("couponStatus_example");
$request->setCouponType("couponType_example");
$request->setStartTime("2023-10-26 09:44:03");
$request->setEndTime("yyyy-MM-dd HH:mm:ss");
$request->setPageNo(56);
$request->setPageSize(56);

try {
    $response = $api_client->couponListQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->couponListQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **couponStatus** | **string**|  | [optional]
 **couponType** | **string**|  | [optional]
 **startTime** | **string**|  | [optional]
 **endTime** | **string**|  | [optional]
 **pageNo** | **int**|  | [optional]
 **pageSize** | **int**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\CouponListQueryCouponPageListQueryResponseResult**](../Model/CouponListQueryCouponPageListQueryResponseResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **create_rights_qrcode_adapter**
CreateRightsQrcodeAdapterResponse create_rights_qrcode_adapter(CreateRightsQrcodeAdapterRequest request)

生成权益二维码信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\CreateRightsQrcodeAdapterRequest();
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setRightsCode("rightsCode_example");
$request->setMerchantNo("merchantNo_example");
$request->setUserNo("userNo_example");

try {
    $response = $api_client->create_rights_qrcode_adapter($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->create_rights_qrcode_adapter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operatedMerchantNo** | **string**|  | [optional]
 **rightsCode** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\CreateRightsQrCodeAdapterRespDTO**](../Model/CreateRightsQrCodeAdapterRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **frozen_rights**
FrozenRightsResponse frozen_rights(FrozenRightsRequest request)

权益冻结

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\FrozenRightsRequest();
$request->setProductNo("productNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->frozen_rights($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->frozen_rights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\BaseResponse**](../Model/BaseResponse.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pointCreate**
PointCreateResponse pointCreate(PointCreateRequest request)

营销积分账户开立

营销积分账户开立

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\PointCreateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");

try {
    $response = $api_client->pointCreate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->pointCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\PointCreateAccountCreateResponseDTOResult**](../Model/PointCreateAccountCreateResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pointOperate**
PointOperateResponse pointOperate(PointOperateRequest request)

营销账户积分变更

营销账户积分变更

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\PointOperateRequest();
$request->setRequestId("requestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setPoint(1.2);
$request->setPayDirection("payDirection_example");
$request->setRemark("remark_example");

try {
    $response = $api_client->pointOperate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->pointOperate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestId** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **point** | **float**|  | [optional]
 **payDirection** | **string**|  | [optional]
 **remark** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\PointOperatePointAccountOperateResponseDTOResult**](../Model/PointOperatePointAccountOperateResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **pointQuery**
PointQueryResponse pointQuery(PointQueryRequest request)

营销账户积分查询

营销账户积分查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\PointQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");

try {
    $response = $api_client->pointQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->pointQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 业务发起商编 |
 **merchantNo** | **string**| 商户编号 |
 **merchantUserNo** | **string**| 商户用户ID |

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\PointQueryPointAccountQueryResponseDTOResult**](../Model/PointQueryPointAccountQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **query_consume_record_adapter**
QueryConsumeRecordAdapterResponse query_consume_record_adapter(QueryConsumeRecordAdapterRequest request)

查询核销记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\QueryConsumeRecordAdapterRequest();
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setUserNo("userNo_example");
$request->setPageNo(56);
$request->setPageSize(56);
$request->setConsumeTimeEnd("consumeTimeEnd_example");
$request->setConsumeTimeStart("consumeTimeStart_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->query_consume_record_adapter($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->query_consume_record_adapter: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operatedMerchantNo** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **pageNo** | **int**|  | [optional]
 **pageSize** | **int**|  | [optional]
 **consumeTimeEnd** | **string**|  | [optional]
 **consumeTimeStart** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\QueryRightsConsumeAdapterRespDTO**](../Model/QueryRightsConsumeAdapterRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **query_rights**
QueryRightsResponse query_rights(QueryRightsRequest request)

查询权益列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\QueryRightsRequest();
$request->setUserNo("userNo_example");
$request->setPageNo(56);
$request->setPageSize(56);
$request->setMerchantNo("merchantNo_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");

try {
    $response = $api_client->query_rights($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->query_rights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userNo** | **string**|  | [optional]
 **pageNo** | **int**|  | [optional]
 **pageSize** | **int**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **operatedMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\QueryRightsListAdapterRespDTO**](../Model/QueryRightsListAdapterRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rightsCreateQrcode**
RightsCreateQrcodeResponse rightsCreateQrcode(RightsCreateQrcodeRequest request)

生成权益二维码信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\RightsCreateQrcodeRequest();
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setRightsCode("rightsCode_example");
$request->setMerchantNo("merchantNo_example");
$request->setUserNo("userNo_example");

try {
    $response = $api_client->rightsCreateQrcode($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->rightsCreateQrcode: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operatedMerchantNo** | **string**|  | [optional]
 **rightsCode** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\CreateRightsQrCodeAdapterRespDTO**](../Model/CreateRightsQrCodeAdapterRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rightsFrozenRights**
RightsFrozenRightsResponse rightsFrozenRights(RightsFrozenRightsRequest request)

权益冻结

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\RightsFrozenRightsRequest();
$request->setProductNo("productNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->rightsFrozenRights($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->rightsFrozenRights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **productNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\BaseResponse**](../Model/BaseResponse.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rightsQueryConsumeRecords**
RightsQueryConsumeRecordsResponse rightsQueryConsumeRecords(RightsQueryConsumeRecordsRequest request)

查询核销记录

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\RightsQueryConsumeRecordsRequest();
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setUserNo("userNo_example");
$request->setPageNo(56);
$request->setPageSize(56);
$request->setConsumeTimeEnd("consumeTimeEnd_example");
$request->setConsumeTimeStart("consumeTimeStart_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->rightsQueryConsumeRecords($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->rightsQueryConsumeRecords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operatedMerchantNo** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **pageNo** | **int**|  | [optional]
 **pageSize** | **int**|  | [optional]
 **consumeTimeEnd** | **string**|  | [optional]
 **consumeTimeStart** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\QueryRightsConsumeAdapterRespDTO**](../Model/QueryRightsConsumeAdapterRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rightsQueryRights**
RightsQueryRightsResponse rightsQueryRights(RightsQueryRightsRequest request)

查询权益列表

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\RightsQueryRightsRequest();
$request->setUserNo("userNo_example");
$request->setPageNo(56);
$request->setPageSize(56);
$request->setMerchantNo("merchantNo_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");

try {
    $response = $api_client->rightsQueryRights($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->rightsQueryRights: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **userNo** | **string**|  | [optional]
 **pageNo** | **int**|  | [optional]
 **pageSize** | **int**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **operatedMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\QueryRightsListAdapterRespDTO**](../Model/QueryRightsListAdapterRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rightsTransfer**
RightsTransferResponse rightsTransfer(RightsTransferRequest request)

权益转移

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\RightsTransferRequest();
$request->setMerchantNo("merchantNo_example");
$request->setUserNo("userNo_example");
$request->setProductNo("productNo_example");

try {
    $response = $api_client->rightsTransfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->rightsTransfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **productNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\BaseResponse**](../Model/BaseResponse.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rights_transfer**
RightsTransferResponse rights_transfer(RightsTransferRequest request)

权益转移

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\RightsTransferRequest();
$request->setMerchantNo("merchantNo_example");
$request->setUserNo("userNo_example");
$request->setProductNo("productNo_example");

try {
    $response = $api_client->rights_transfer($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->rights_transfer: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **userNo** | **string**|  | [optional]
 **productNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\BaseResponse**](../Model/BaseResponse.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subsidyApply**
SubsidyApplyResponse subsidyApply(SubsidyApplyRequest request)

申请营销补贴

商户申请营销补贴

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyApplyRequest();
$request->setOrderId("orderId_example");
$request->setUniqueOrderNo("1001201612070000000000000565");
$request->setSubsidyRequestId("subsidyRequestId_example");
$request->setSubsidyAmount("12.34");
$request->setAssumeMerchantNo("assumeMerchantNo_example");
$request->setMemo("memo_example");
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");

try {
    $response = $api_client->subsidyApply($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->subsidyApply: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **subsidyRequestId** | **string**|  | [optional]
 **subsidyAmount** | **string**|  | [optional]
 **assumeMerchantNo** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyApplyYopSubsidyResDTOResult**](../Model/SubsidyApplyYopSubsidyResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subsidyBack**
SubsidyBackResponse subsidyBack(SubsidyBackRequest request)

申请营销补贴退回

商户申请营销补贴退回

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackRequest();
$request->setOrderId("orderId_example");
$request->setSubsidyRequestId("subsidyRequestId_example");
$request->setSubsidyBackRequestId("subsidyBackRequestId_example");
$request->setSubsidyBackAmount("12.34");
$request->setReturnAccountType("returnAccountType_example");
$request->setMemo("memo_example");
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");

try {
    $response = $api_client->subsidyBack($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->subsidyBack: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **subsidyRequestId** | **string**|  | [optional]
 **subsidyBackRequestId** | **string**|  | [optional]
 **subsidyBackAmount** | **string**|  | [optional]
 **returnAccountType** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackYopSubsidyBackResDTOResult**](../Model/SubsidyBackYopSubsidyBackResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subsidyBackQuery**
SubsidyBackQueryResponse subsidyBackQuery(SubsidyBackQueryRequest request)

查询营销补贴退回

商户申请营销补贴退回查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackQueryRequest();
$request->setSubsidyRequestId("subsidyRequestId_example");
$request->setSubsidyBackRequestId("subsidyBackRequestId_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->subsidyBackQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->subsidyBackQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **subsidyRequestId** | **string**| 商户补贴请求号 |
 **subsidyBackRequestId** | **string**| 商户补贴退回请求号 |
 **parentMerchantNo** | **string**| 发起方商户编号(与交易下单传入保持一致) |
 **merchantNo** | **string**| 收款商户编号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackQueryYopQuerySubsidyBackResDTOResult**](../Model/SubsidyBackQueryYopQuerySubsidyBackResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subsidyQuery**
SubsidyQueryResponse subsidyQuery(SubsidyQueryRequest request)

查询营销补贴

商户申请营销补贴查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Promtion\PromtionClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyQueryRequest();
$request->setOrderId("orderId_example");
$request->setSubsidyRequestId("subsidyRequestId_example");
$request->setParentMerchantNo("10012426723");
$request->setMerchantNo("10012426723");

try {
    $response = $api_client->subsidyQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling PromtionClient->subsidyQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**| 商户收款请求号 |
 **subsidyRequestId** | **string**| 商户营销补贴请求号 |
 **parentMerchantNo** | **string**| 发起方商户编号(与交易下单传入保持一致) |
 **merchantNo** | **string**| 收款商户编号 |

### Return type
[**\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyQueryYopQuerySubsidyResDTOResult**](../Model/SubsidyQueryYopQuerySubsidyResDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

