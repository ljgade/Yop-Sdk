# WalletQueryWithdrawResultDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码 | [optional] 
**message** | **string** | 返回信息 | [optional] 
**requestNo** | **string** | 商户请求号&lt;br&gt;&lt;span style&#x3D;\&quot;font-family: Helvetica, Arial, sans-serif; font-size: 9.600000381469727px;\&quot;&gt;商户请求号&lt;/span&gt; | [optional] 
**businessNo** | **string** | 易宝订单号 | [optional] 
**amount** | **float** | 提现金额 | [optional] 
**bindId** | **string** | 绑卡ID | [optional] 
**cardNo** | **string** | 卡号&lt;br&gt;显示前4后2，中间* | [optional] 
**bankName** | **string** | 银行名称 | [optional] 
**bankCode** | **string** | 银行编码 | [optional] 
**tradeStatus** | **string** | 状态&lt;br&gt;可选项如下:&lt;br&gt;SUCCESS:成功&lt;br&gt;FAIL:失败&lt;br&gt;ACCEPTED:打款中 | [optional] 
**acceptTime** | [**\DateTime**](\DateTime.md) | 受理时间 | [optional] 
**completeTime** | [**\DateTime**](\DateTime.md) | 完成时间 | [optional] 
**userFee** | **float** | 用户手续费 | [optional] 
**withdrawType** | **string** | 提现方式&lt;br&gt;可选项如下:&lt;br&gt;0:提现实时到账&lt;br&gt;1:提现2小时到账&lt;br&gt;2:次日到账 | [optional] 
**deductionAmount** | **float** | 实际扣款金额 | [optional] 
**arrivalAmount** | **float** | 到账金额 | [optional] 
**feeInnerType** | **string** | 手续费扣除方式&lt;br&gt;可选项如下:&lt;br&gt;INNER:内扣&lt;br&gt;OUTER:外扣&lt;br&gt;OUTER_TO_INNER:外扣转内扣 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


