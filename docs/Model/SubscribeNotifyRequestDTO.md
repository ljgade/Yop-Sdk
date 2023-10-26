# SubscribeNotifyRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantNo** | **string** | &lt;p&gt;商户编号（通知会员的归属商编）&lt;/p&gt; | 
**requestNo** | **string** | &lt;p&gt;商户请求号&lt;/p&gt; | 
**notifyUrl** | **string** | &lt;p&gt;通知商户地址&lt;/p&gt; | [optional] 
**memberList** | [**\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberSubscribeNotifyInfo[]**](MemberSubscribeNotifyInfo.md) | &lt;p&gt;会员列表&lt;/p&gt; | 
**notifyType** | **string** | &lt;p&gt;变更通知类型&lt;/p&gt; 可选项如下: ENABLE:会员续期有效 EXPIRE:会员订阅到期 | 
**operateTime** | **string** | &lt;p&gt;变更时间&lt;/p&gt; | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


