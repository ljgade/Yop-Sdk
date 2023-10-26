# OrderBaseResponseDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | &lt;p&gt;代表本次请求成功，订单状态需要关注orderStatus&lt;/p&gt; | [optional] 
**orderStatus** | **string** | &lt;pre&gt;/_**&lt;br /&gt; * 订单状态:&lt;br /&gt; * 0:待支付&lt;br /&gt; * 1:待出货（已支付）&lt;br /&gt; * 2:已出货&lt;br /&gt; * 3:已取消&lt;br /&gt; * 4:交易完成&lt;br /&gt; * 部分退款/取消，对应已出货；全部退款，对应已取消&lt;br /&gt; *_/&lt;/pre&gt; | 
**supplierChannel** | **string** | &lt;pre&gt;供应商渠道&lt;/pre&gt; | 
**message** | **string** |  | [optional] 
**paymentUniqueOrderNo** | **string** | &lt;pre&gt;支付请求流水号&lt;/pre&gt; | [optional] 
**orderAmount** | **float** | &lt;pre&gt;订单金额&lt;/pre&gt; | 
**complateTime** | **string** | &lt;pre&gt;完成时间。订单出货成功时返回&lt;/pre&gt; | [optional] 
**cancelTime** | **string** | &lt;p&gt;订单取消时返回，取消时间&lt;/p&gt; | [optional] 
**orderSuccessTime** | **string** | &lt;pre&gt;下单成功时间。下单成功时返回&lt;/pre&gt; | [optional] 
**systemOrderNo** | **string** | &lt;pre&gt;系统返回唯一订单号&lt;/pre&gt; | 
**paySuccessTime** | **string** | &lt;pre&gt;支付成功时间。支付成功时返回&lt;/pre&gt; | 
**parentMerchantNo** | **string** | &lt;p&gt;请求商编&lt;/p&gt; | 
**merchantNo** | **string** | &lt;p&gt;业务商编&lt;/p&gt; | 
**merchantRequestNo** | **string** | &lt;p&gt;商户订单号&lt;/p&gt; | 
**parentMerchantRequestNo** | **string** | &lt;pre&gt;请求方订单号&lt;/pre&gt; | [optional] 
**supplierOrderNo** | **string** | &lt;pre&gt;资源方订单号&lt;/pre&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


