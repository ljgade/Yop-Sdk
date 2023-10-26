# StandardOpenAccountResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | 返回状态码&lt;br&gt;AM00000 成功，其他请参考错误码 | [optional] 
**returnMsg** | **string** | 返回描述信息 | [optional] 
**requestNo** | **string** | 商户订单号 | [optional] 
**orderNo** | **string** | 易宝唯一订单号 | [optional] 
**status** | **string** | 开户状态&lt;br&gt;可选项如下:&lt;br&gt;PROCESS:请求已受理&lt;br&gt;FAIL:失败 | [optional] 
**signUrl** | **string** | 签约地址 | [optional] 
**authType** | **string** | 额外认证类型&lt;br&gt;可选项如下:&lt;br&gt;NO_AUTH:无须认证&lt;br&gt;SHORT_MSG_AUTH:短信认证 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


