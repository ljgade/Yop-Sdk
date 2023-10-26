# StandardOpenAccountRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**requestNo** | **string** | 商户订单号 | 
**parentMerchantNo** | **string** | 业务发起方商编&lt;br&gt;*标准商户收付款方案中此参数与开户商户编号一致；*平台商户收付款方案中此参数为平台商商户编号；*服务商解决方案中，①所属标准商户申请开户时，该参数为服务商商编 ②所属平台商申请开户且以服务资质在银行开立母户时，此参数填写服务商商户编号 ②所属平台商入驻商户申请开户时需以平台资质在银行开立母户，该参数填写平台商商编 | 
**merchantNo** | **string** | 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 | 
**merchantName** | **string** | 商编名称&lt;br&gt;请传商户编号对应的商户签约名，与营业执照保持一致 | 
**openBankCode** | **string** | &lt;p&gt;开户银行编码&lt;br /&gt;可选项如下:&lt;br /&gt;XIB&lt;br /&gt;FJHTB&lt;br /&gt;JSBCHINA&lt;br /&gt;WHZBB&lt;br /&gt;XWB&lt;/p&gt; &lt;pre&gt;SUNINGBANK&lt;/pre&gt; | 
**certificateType** | **string** | 证件类型&lt;br&gt;可选项如下:&lt;br&gt;BUSINESS_LICENCE:营业执照&lt;br&gt;(银行编码为XIB,FJHTB,WHZBB,XWB时必填) | [optional] 
**certificateNo** | **string** | 证件号&lt;br&gt;(银行编码为XIB,FJHTB,WHZBB,XWB时必填） | [optional] 
**notifyUrl** | **string** | 回调通知地址&lt;br&gt;回调内容请参看：&lt;a href&#x3D;\&quot;#anchor7\&quot;&gt;开立银行账户结果通知&lt;/a&gt; | 
**xibOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\XibOpenAccountDTO**](XibOpenAccountDTO.md) |  | [optional] 
**htbOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\HtbOpenAccountDTO**](HtbOpenAccountDTO.md) |  | [optional] 
**jsbcOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\JsbcOpenAccountDTO**](JsbcOpenAccountDTO.md) |  | [optional] 
**whzbbOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\WhzbbOpenAccountDTO**](WhzbbOpenAccountDTO.md) |  | [optional] 
**xwbOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\XwbOpenAccountDTO**](XwbOpenAccountDTO.md) |  | [optional] 
**snOpenAccountDTO** | [**\Yeepay\Yop\Sdk\Service\Account\Model\SnOpenAccountDTO**](SnOpenAccountDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


