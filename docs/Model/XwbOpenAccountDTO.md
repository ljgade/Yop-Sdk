# XwbOpenAccountDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**notifySmsUrl** | **string** | 短验通知路径&lt;br&gt;开户申请银行审核后通知到该地址，商户接收后发起申请短验 | 
**bindCardType** | **string** | 绑定卡类型&lt;br&gt;可选项如下:&lt;br&gt;PUBLIC_CARD:对公卡&lt;br&gt;PRIVATE_CARD:对私卡 | 
**bindAccountName** | **string** | 绑卡银行账户名称 | 
**bindCardNo** | **string** | 绑定银行卡号 | 
**bindBankCode** | **string** | 绑定银行编码 | 
**businessScope** | **string** | 经营范围 | 
**businessValidStart** | **string** | 企业证件生效日期&lt;br&gt;参数格式为yyyyMMdd | 
**businessValidEnd** | **string** | 企业证件失效日期&lt;br&gt;参数格式为yyyyMMdd或者forever | 
**legalMobile** | **string** | 法人手机号码 | 
**contactName** | **string** | 短验联系人姓名&lt;br&gt;用于开户过程中做短验申请和确认使用 | 
**contactMobile** | **string** | 短验联系人手机号&lt;br&gt;法人和联系人非同一人时，手机号不能是同一个 | 
**contactCardNo** | **string** | 短验联系人证件号码 | 
**contactCardImageFont** | **string** | 短验联系人证件照片正面地址 | 
**contactCardImageBack** | **string** | 短验联系人件照片反面地址 | 
**contactCardType** | **string** | 短验联系人证件类型&lt;br&gt;可选项如下:&lt;br&gt;ID_CARD:身份证 | 
**magAddress** | **string** | 企业实际经营地址 | 
**caAuthorizationFile** | **string** | 企业CA证书及电子签名授权委托书路径 | 
**legalAuthorizationFile** | **string** | 法人委托授权书 | [optional] 
**address** | **string** | 办公地址 | 
**benefitInfoReqDTOList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\BenefitInfoReqDTO[]**](BenefitInfoReqDTO.md) | 收益人信息&lt;br&gt;不能超过4个 | 
**shareHolderInfoList** | [**\Yeepay\Yop\Sdk\Service\Account\Model\ShareHolderInfoReqDTO[]**](ShareHolderInfoReqDTO.md) | 股东信息&lt;br&gt;不能超过4个 | 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


