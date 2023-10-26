# Yeepay\Yop\Sdk\AtVcc

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**unionPayOrderQuery**](AtVcc.md#unionPayOrderQuery) | **GET** /rest/v1.0/at-vcc/union-pay/order/query | 银联交易查询


# **unionPayOrderQuery**
UnionPayOrderQueryResponse unionPayOrderQuery(UnionPayOrderQueryRequest request)

银联交易查询

银联交易查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\AtVcc\AtVccClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\AtVcc\Model\UnionPayOrderQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setCustomerNo("customerNo_example");
$request->setTransactionTypeList(array("transactionTypeList_example"));
$request->setAccessChannel("accessChannel_example");

try {
    $response = $api_client->unionPayOrderQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling AtVccClient->unionPayOrderQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户申卡请求号 |
 **customerNo** | **string**| 商户编号 |
 **transactionTypeList** | [**string[]**](../Model/string.md)| 交易类型集合&lt;br&gt;可选项如下:&lt;br&gt;CONSUMPTION:消费&lt;br&gt;REFUND:退货&lt;br&gt;CONSUMPTION_FAIL:消费失败 | [optional]
 **accessChannel** | **string**| 访问渠道 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\AtVcc\Model\UnionPayOrderQueryAuthReportQueryResponseDTOResult**](../Model/UnionPayOrderQueryAuthReportQueryResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

