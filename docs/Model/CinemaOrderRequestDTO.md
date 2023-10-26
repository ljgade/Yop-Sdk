# CinemaOrderRequestDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**seatsCount** | **int** | &lt;p&gt;座位数量&lt;/p&gt; | 
**mobile** | **string** | &lt;p&gt;手机号&lt;/p&gt; | [optional] 
**supplierChannel** | **string** | &lt;p&gt;供应商编码&lt;/p&gt; | 
**acceptAdjust** | **bool** | &lt;pre&gt;是否接受调座&lt;/pre&gt; | 
**seats** | **string** | &lt;pre&gt;原始座位id，多个座位用英文,号分割&lt;/pre&gt; | 
**showId** | **int** | &lt;pre&gt;场次id&lt;/pre&gt; | 
**drawMode** | **int** | &lt;pre&gt;0:特惠出票 5:快速出票&lt;/pre&gt; | 
**complateNotifyUrl** | **string** | &lt;pre&gt;订单完成通知地址：订单发货成功、订单取消、订单已完成&lt;a class&#x3D;\&quot;json_link\&quot; href&#x3D;\&quot;https://wwww.yeepay.com/\&quot; target&#x3D;\&quot;_blank\&quot; rel&#x3D;\&quot;noopener\&quot;&gt;https://wwww.yeepay.com&lt;/a&gt;&lt;/pre&gt; | [optional] 
**platformUniqueId** | **string** | &lt;pre&gt;平台用户唯一标识，&lt;br /&gt;不传则会使用一个统一的平台用户来作为订单用户&lt;/pre&gt; | [optional] 
**platformIdAccountInfo** | **string** | &lt;pre&gt;供应方平台给采购方分配的账号信息。&lt;br /&gt;platformId与secret要拼接起来使用&lt;br /&gt;aes加密后传递，aes key在对接时找易宝技术支持&lt;/pre&gt; &lt;pre&gt;加密方式：&lt;br /&gt;platformId&#x3D;123&amp;amp;secret&#x3D;abc &lt;br /&gt;将拼接的字符串直接使用aes加密&lt;/pre&gt; | 
**merchantNo** | **string** | &lt;p&gt;业务商编&lt;/p&gt; | 
**parentMerchantNo** | **string** | &lt;p&gt;请求方商编&lt;/p&gt; | 
**merchantRequestNo** | **string** | &lt;p&gt;商户订单号&lt;/p&gt; | 
**parentMerchantRequestNo** | **string** | &lt;pre&gt;请求方订单号&lt;/pre&gt; | [optional] 
**orderAmount** | **float** | &lt;pre&gt;订单金额，保留2位小数。&lt;/pre&gt; &lt;p&gt;如果传入金额和资源方生成的订单金额不一致则会报错&lt;/p&gt; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


