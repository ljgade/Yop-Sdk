# QueryMGB2CResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码 | [optional] 
**message** | **string** | 返回信息&lt;br&gt;返回码的详细说明 | [optional] 
**requestNo** | **string** | 商户请求号 | [optional] 
**businessNo** | **string** | 易宝订单号 | [optional] 
**orderAmount** | **float** | 转账订单金额 | [optional] 
**orderStatus** | **string** | 转账订单状态&lt;br&gt;转账订单的4个状态&lt;br&gt;可选项如下:&lt;br&gt;UNCREDITED:已受理-处理中&lt;br&gt;NOT_VERIFIED:待确认&lt;br&gt;CREDITED:转账成功&lt;br&gt;COMMIT_FAILURE:转账失败 | [optional] 
**fromMerchantNo** | **string** | 交易主体商编&lt;br&gt;转出方商户编号 | [optional] 
**toMerchantNo** | **string** | 转帐接收方平台商编&lt;br&gt;转帐接收方用户所在平台商编 | [optional] 
**toMemberNo** | **string** | 转出方易宝用户编号 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


