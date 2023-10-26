# WalletMemberResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码 | [optional] 
**message** | **string** | 返回消息&lt;br&gt;返回码的详细说明 | [optional] 
**walletUserNo** | **string** | 钱包账户ID&lt;br&gt;用户在易宝钱包生成的唯一编号 | [optional] 
**walletStatus** | **string** | 钱包账户状态&lt;br&gt;可选项如下:&lt;br&gt;AVAILABLY:正常&lt;br&gt;FREEZE:冻结&lt;br&gt;CANCAEL:已注销 | [optional] 
**balance** | **string** | 钱包账户余额&lt;br&gt;钱包账户当前总余额，单位元，精确到小数点后两位 | [optional] 
**name** | **string** | 姓名 | [optional] 
**certificateType** | **string** | 证件类型&lt;br&gt;IDENTITY_CARD：身份证 | [optional] 
**certificateNo** | **string** | 证件号码&lt;br&gt;显示前6后2，中间为* | [optional] 
**walletCategory** | **string** | 钱包账户等级&lt;br&gt;可选项如下:&lt;br&gt;ONE_CATEGORY:一类&lt;br&gt;TWO_CATEGORY:二类 &lt;br&gt;THREE_CATEGORY:三类 | [optional] 
**tradePswdSet** | **bool** | 是否已设置交易密码&lt;br&gt;TRUE：已设置 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


