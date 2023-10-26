# Yeepay\Yop\Sdk\Offline

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bind**](Offline.md#bind) | **POST** /rest/v1.0/offline/bind | 绑机
[**createShop**](Offline.md#createShop) | **POST** /rest/v1.0/offline/create-shop | 创建网点
[**getShop**](Offline.md#getShop) | **GET** /rest/v1.0/offline/get-shop | 查询网点
[**operateShop**](Offline.md#operateShop) | **POST** /rest/v1.0/offline/operate-shop | 关闭/启用网点
[**queryAgentList**](Offline.md#queryAgentList) | **GET** /rest/v1.0/offline/query-agent-list | 查询采购关系
[**queryOrderInfo**](Offline.md#queryOrderInfo) | **POST** /rest/v1.0/offline/query-order-info | 查询POS交易信息
[**queryPosTrxInfo**](Offline.md#queryPosTrxInfo) | **POST** /rest/v1.0/offline/query-order-info | 查询POS交易信息
[**queryShopBindList**](Offline.md#queryShopBindList) | **GET** /rest/v1.0/offline/query-shop-bind-list | 查询绑机关系
[**unbind**](Offline.md#unbind) | **POST** /rest/v1.0/offline/unbind | 解绑
[**updateShop**](Offline.md#updateShop) | **POST** /rest/v1.0/offline/update-shop | 修改网点信息


# **bind**
BindResponse bind(BindRequest request)

绑机

此接口提供给商户调用，用于终端绑机。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\BindRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopBindTerminalRequestDto());

try {
    $response = $api_client->bind($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->bind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Offline\Model\YopBindTerminalRequestDto**](../Model/YopBindTerminalRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopBindTerminalResponseDto**](../Model/YopBindTerminalResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **createShop**
CreateShopResponse createShop(CreateShopRequest request)

创建网点

此接口提供给商户调用，用于创建网点。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\CreateShopRequest();
$request->setAddress("address_example");
$request->setProvince("province_example");
$request->setCity("city_example");
$request->setDistrict("district_example");
$request->setMobile("mobile_example");
$request->setShopName("shopName_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setLinkman("linkman_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->createShop($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->createShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**|  | [optional]
 **province** | **string**|  | [optional]
 **city** | **string**|  | [optional]
 **district** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **shopName** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **linkman** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopCreateShopRspDTO**](../Model/YopCreateShopRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **getShop**
GetShopResponse getShop(GetShopRequest request)

查询网点

此接口提供给商户调用，用于查询网点。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\GetShopRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setShopName("shopName_example");
$request->setShopNo("shopNo_example");
$request->setStatus("status_example");

try {
    $response = $api_client->getShop($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->getShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;div&gt;发起方商户编号。*标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编&lt;/div&gt; |
 **merchantNo** | **string**| &lt;pre&gt;收单商编&lt;/pre&gt; |
 **shopName** | **string**| &lt;pre&gt;网点名&lt;/pre&gt; | [optional]
 **shopNo** | **string**| &lt;pre&gt;网点编号&lt;/pre&gt; | [optional]
 **status** | **string**| &lt;pre&gt;&amp;nbsp;&lt;/pre&gt; &lt;div&gt;网点状态：&lt;/div&gt; &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;5\&quot;&gt;&lt;span class&#x3D;\&quot;text-only text-with-abbreviation text-with-abbreviation-bottomline\&quot;&gt;枚举&lt;/span&gt;值：&lt;/span&gt;&lt;/div&gt; &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;7\&quot;&gt;&lt;em&gt;PERMIT&lt;/em&gt;：&lt;em&gt;活跃&lt;/em&gt;&lt;/span&gt;&lt;/div&gt; &lt;div&gt;&lt;span class&#x3D;\&quot;text-only\&quot; data-eleid&#x3D;\&quot;9\&quot;&gt;&lt;em&gt;FORBID&lt;/em&gt;：&lt;em&gt;关闭&lt;/em&gt;&lt;/span&gt;&lt;/div&gt; &lt;pre&gt;&amp;nbsp;&lt;/pre&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopGetShopRspDTO**](../Model/YopGetShopRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **operateShop**
OperateShopResponse operateShop(OperateShopRequest request)

关闭/启用网点

此接口提供给商户调用，用于关闭/启用网点。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\OperateShopRequest();
$request->setOperateType("operateType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setShopNo("shopNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->operateShop($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->operateShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operateType** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **shopNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopBaseRspDTO**](../Model/YopBaseRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryAgentList**
QueryAgentListResponse queryAgentList(QueryAgentListRequest request)

查询采购关系

查询采购商已采购（购买）的终端。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryAgentListRequest();
$request->setAgentMerchantNo("agentMerchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setTerminalNo("terminalNo_example");
$request->setSerialNo("serialNo_example");

try {
    $response = $api_client->queryAgentList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryAgentList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **agentMerchantNo** | **string**| &lt;div&gt;采购商商编，指付款采购终端的商编&lt;/div&gt; |
 **parentMerchantNo** | **string**| &lt;div&gt;采购商上级商户编号 *标准商户收付款方案中此参数与代理商商户编号一致；*平台商户收付款方案中此参数为平台商商编；*服务商解决方案中，①采购商为标准商户时，该参数为标准商户商编 ②采购商为平台商收款或平台商入驻时，该参数为平台商商编&lt;/div&gt; |
 **terminalNo** | **string**| &lt;pre&gt;终端号&lt;/pre&gt; | [optional]
 **serialNo** | **string**| &lt;pre&gt;终端序列号&lt;/pre&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryAgentRspDto**](../Model/YopQueryAgentRspDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryOrderInfo**
QueryOrderInfoResponse queryOrderInfo(QueryOrderInfoRequest request)

查询POS交易信息

根据商编和商户订单号查询POS交易信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryOrderInfoRequest();
$request->setOrderId("customerReNo1666686514009");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->queryOrderInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryOrderInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryOrderInfoRespDTO**](../Model/YopQueryOrderInfoRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryPosTrxInfo**
QueryPosTrxInfoResponse queryPosTrxInfo(QueryPosTrxInfoRequest request)

查询POS交易信息

根据商编和商户订单号查询POS交易信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryPosTrxInfoRequest();
$request->setOrderId("customerReNo1666686514009");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->queryPosTrxInfo($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryPosTrxInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderId** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryOrderInfoRespDTO**](../Model/YopQueryOrderInfoRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **queryShopBindList**
QueryShopBindListResponse queryShopBindList(QueryShopBindListRequest request)

查询绑机关系

此接口提供给商户调用，用于查询已绑定的终端信息。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\QueryShopBindListRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setShopNo("shopNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->queryShopBindList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->queryShopBindList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;div&gt;发起方商户编号。*标准商户收付款方案中此参数与收款商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①标准商户收款时，该参数为标准商户商编 ②平台商收款或平台商入驻商户收款时，该参数为平台商商编&lt;/div&gt; |
 **shopNo** | **string**| &lt;pre&gt;网点编号&lt;/pre&gt; |
 **merchantNo** | **string**| &lt;pre&gt;收单商编&lt;/pre&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryShopBindRspDto**](../Model/YopQueryShopBindRspDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **unbind**
UnbindResponse unbind(UnbindRequest request)

解绑

此接口提供给商户调用，用于终端解绑。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UnbindRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\Offline\Model\YopUnBindTerminalRequestDto());

try {
    $response = $api_client->unbind($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->unbind: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\Offline\Model\YopUnBindTerminalRequestDto**](../Model/YopUnBindTerminalRequestDto.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopUnBindTerminalResponseDto**](../Model/YopUnBindTerminalResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **updateShop**
UpdateShopResponse updateShop(UpdateShopRequest request)

修改网点信息

此接口提供给商户调用，用于修改网点，只支持修改联系人、手机号码和网点地址。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\Offline\OfflineClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\Offline\Model\UpdateShopRequest();
$request->setAddress("address_example");
$request->setMobile("mobile_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setShopNo("shopNo_example");
$request->setLinkman("linkman_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->updateShop($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling OfflineClient->updateShop: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **address** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **shopNo** | **string**|  | [optional]
 **linkman** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\Offline\Model\YopBaseRspDTO**](../Model/YopBaseRspDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

