# QueryBankAccountTradeRespDTO

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**returnCode** | **string** | 返回码 | [optional] 
**returnMsg** | **string** | 返回信息 | [optional] 
**totalNum** | **string** | 总记录条数 | [optional] 
**debitSum** | **string** | 支出总笔数 | [optional] 
**debitAmt** | **string** | 支出总金额 | [optional] 
**loanSum** | **string** | 收入总笔数 | [optional] 
**loanAmt** | **string** | 收入总金额 | [optional] 
**queryToken** | **string** | 查询token&lt;br&gt;用于下次分页查询使用，若返回为空代表已经全部查完 | [optional] 
**queryTime** | **string** | 查询时间戳&lt;br&gt;用于下次分页查询使用，若返回为空代表已经全部查完 | [optional] 
**detailList** | [**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountTradeDTO[]**](BankAccountTradeDTO.md) |  | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


