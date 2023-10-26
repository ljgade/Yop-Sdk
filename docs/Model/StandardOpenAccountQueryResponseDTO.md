# StandardOpenAccountQueryResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | 返回状态码AM00000 成功，其他请参考错误码 | [optional] 
**returnMsg** | **string** | 返回描述信息 | [optional] 
**merchantNo** | **string** | 商编号&lt;br&gt;业务主体商编 | [optional] 
**requestNo** | **string** | 商户订单号 | [optional] 
**orderNo** | **string** | 易宝唯一订单号 | [optional] 
**status** | **string** | 开户状态&lt;br&gt;可选项如下:&lt;br&gt;SUCCESS:成功&lt;br&gt;FAIL:失败&lt;br&gt;PROCESS:请求已受理 | [optional] 
**bankAccountNo** | **string** | 银行账户号(成功时返回)&lt;br&gt;此字段为后续请求查询余额，资金划拨等服务接口时必须参数，请着重记录。 | [optional] 
**bankCustomerNo** | **string** | &lt;p&gt;银行客户号(成功时返回)&lt;br /&gt;此字段是银行收款所需账号，替换外部结算卡时请替换为此银行客户号，银行才能正常接收商户结算资金。&lt;/p&gt; | [optional] 
**openRequestTime** | **string** | 开户请求时间&lt;br&gt;格式:yyyy-MM-dd HH:mm:ss | [optional] 
**openCompleteTime** | **string** | 开户完成时间(成功时返回)&lt;br&gt;格式:yyyy-MM-dd HH:mm:ss | [optional] 
**failReason** | **string** | 失败原因(失败时返回) | [optional] 
**authType** | **string** | 额外认证方式&lt;br&gt;可选项如下:&lt;br&gt;NO_AUTH:无须认证&lt;br&gt;SHORT_MSG_AUTH:短信认证 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


