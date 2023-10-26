# QueryRechargeResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码 | [optional] 
**message** | **string** | 返回消息&lt;br&gt;返回码的详细说明 | [optional] 
**requestNo** | **string** | 商户请求号 | [optional] 
**businessNo** | **string** | 易宝订单号 | [optional] 
**amount** | **float** | 充值金额 | [optional] 
**bindId** | **string** | 绑卡ID | [optional] 
**cardNo** | **string** | 卡号&lt;br&gt;显示前6后4，中间为* | [optional] 
**bankName** | **string** | 银行名称 | [optional] 
**bankCode** | **string** | 银行编码 | [optional] 
**orderStatus** | **string** | 订单状态&lt;br&gt;可选项如下:&lt;br&gt;SUCCESS:充值成功&lt;br&gt;FAIL:充值失败 | [optional] 
**orderTime** | [**\DateTime**](\DateTime.md) | 订单完成时间 | [optional] 
**userFee** | **float** | 用户手续费&lt;br&gt;当手续费不是用户承担时该字段为空 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


