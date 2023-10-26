# OrderQueryYopQueryOrderResDTOResult

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | 返回码 | [optional] 
**message** | **string** | 返回信息 | [optional] 
**bizSystemNo** | **string** | 未命名 | [optional] 
**parentMerchantNo** | **string** | 发起方商编 | [optional] 
**merchantNo** | **string** | 商户编号 | [optional] 
**orderId** | **string** | 商户收款请求号 | [optional] 
**uniqueOrderNo** | **string** | 易宝收款订单号 | [optional] 
**status** | **string** | 订单状态 | [optional] 
**orderAmount** | **float** | 订单金额 | [optional] 
**payAmount** | **float** | 支付金额 | [optional] 
**merchantFee** | **float** | 商户手续费 | [optional] 
**customerFee** | **float** | 用户手续费 | [optional] 
**paySuccessDate** | **string** | 支付成功时间 | [optional] 
**memo** | **string** | 对账备注 | [optional] 
**payWay** | **string** | 支付方式 | [optional] 
**token** | **string** | token | [optional] 
**fundProcessType** | **string** | 分账都订单标识 | [optional] 
**bankOrderId** | **string** | 银行订单号 | [optional] 
**channelOrderId** | **string** | 渠道订单号 | [optional] 
**channel** | **string** | 渠道类型 | [optional] 
**realPayAmount** | **float** | 用户实际支付金额 | [optional] 
**unSplitAmount** | **float** | 剩余可分账金额 | [optional] 
**totalRefundAmount** | **float** | 未命名 | [optional] 
**payerInfo** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryPayerInfoResult**](OrderQueryPayerInfoResult.md) | 付款信息 | [optional] 
**channelPromotionInfo** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryChannelPromotionInfoDTOResult[]**](OrderQueryChannelPromotionInfoDTOResult.md) | 渠道侧优惠列表 | [optional] 
**ypPromotionInfo** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryYpPromotionInfoDTOResult[]**](OrderQueryYpPromotionInfoDTOResult.md) | 易宝优惠列表 | [optional] 
**terminalInfo** | **string** | 终端信息 | [optional] 
**installmentInfo** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryInstallmentInfoResult**](OrderQueryInstallmentInfoResult.md) | 信用卡分期信息 | [optional] 
**enterprisePayInfo** | [**\Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryEnterprisePayInfoResult**](OrderQueryEnterprisePayInfoResult.md) | 未命名 | [optional] 
**failReason** | **string** | 支付失败的失败原因 | [optional] 
**failCode** | **string** | 支付失败的code码 | [optional] 
**clearStatus** | **string** | 清算状态 | [optional] 
**tradeType** | **string** | 资金到账类型 | [optional] 
**preAuthStatus** | **string** | 预授权状态 | [optional] 
**preAuthAmount** | **float** | 预授权金额 | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


