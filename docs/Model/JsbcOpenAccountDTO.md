# JsbcOpenAccountDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**accountType** | **string** | 账户类型&lt;br&gt;可选项如下:&lt;br&gt;FUND_ACCOUNT:资金账户&lt;br&gt;ADVANCE_ACCOUNT:预收账户 | 
**bindCardType** | **string** | 绑定卡类型&lt;br&gt;可选项如下:&lt;br&gt;PUBLIC_CARD:对公卡&lt;br&gt;PRIVATE_CARD:对私卡 | [optional] 
**bindCardNo** | **string** | 绑定银行卡号 | [optional] 
**bindBankCode** | **string** | 绑定银行编码 | [optional] 
**bindAccountName** | **string** | 绑定账户名称 | [optional] 
**businessLicenceEffectiveDate** | **string** | 营业执照生效日期&lt;br&gt;格式为yyyyMMdd | 
**businessLicenceExpirationDate** | **string** | 营业执照失效日期&lt;br&gt;参数格式为yyyyMMdd或者forever | 
**legalLicenceEffectiveDate** | **string** | 法人证件生效日期&lt;br&gt;参数格式为yyyyMMdd | 
**legalLicenceExpirationDate** | **string** | 法人证件失效日期&lt;br&gt;参数格式为yyyyMMdd或者forever | 
**registerAddress** | **string** | 商户注册地址不能超过512位 | 
**organizationNo** | **string** | 组织机构代码 | [optional] 
**organizationStart** | **string** | 组织机构代码生效日期&lt;br&gt;参数格式为yyyyMMdd或者forever | [optional] 
**organizationNoEnd** | **string** | 组织机构代码失效日期&lt;br&gt;参数格式为yyyyMMdd或者forever | [optional] 
**taxNo** | **string** | 税务登记号 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


