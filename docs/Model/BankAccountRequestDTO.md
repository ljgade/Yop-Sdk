# BankAccountRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**parentMerchantNo** | **string** | 业务发起方商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） | [optional] 
**merchantNo** | **string** | 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 | [optional] 
**requestNo** | **string** | 商户请求号&lt;br&gt;每次开户的请求号不能重复 | [optional] 
**merchantMemberNo** | **string** | 商户侧会员编号&lt;br&gt;商户侧存的会员编号，不同人的会员编号不能相同 | [optional] 
**accountType** | **string** | 银行编码&lt;br&gt;可选项如下:&lt;br&gt;CNCB:中信银行 | [optional] 
**bankAccountLevel** | **string** | 银行账户等级&lt;br&gt;可选项如下:&lt;br&gt;ONEACCOUNT:一类户&lt;br&gt;TWOACCOUNT:二类户&lt;br&gt;THREEACCOUNT:三类户 | [optional] 
**memberInfo** | [**\Yeepay\Yop\Sdk\Service\MWallet\Model\AccountMemberDTO**](AccountMemberDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


