# Yeepay\Yop\Sdk\MWallet

All URIs are relative to *http://localhost:8080*

Method | HTTP request | Description
------------- | ------------- | -------------
[**accountFaceCertifyOpen**](MWallet.md#accountFaceCertifyOpen) | **POST** /rest/v1.0/m-wallet/account/face-certify-open | 开立钱包账户(支持人脸识别)
[**accountOpen**](MWallet.md#accountOpen) | **POST** /rest/v1.0/m-wallet/account/open | 开立钱包账户
[**accountOpenNotify**](MWallet.md#accountOpenNotify) | **POST** /rest/v1.0/m-wallet/account/open/notify | 钱包开户成功通知
[**accountQuery**](MWallet.md#accountQuery) | **GET** /rest/v1.0/m-wallet/account/query | 查询钱包账户信息
[**accountQueryBalance**](MWallet.md#accountQueryBalance) | **GET** /rest/v1.0/m-wallet/account/query-balance | 会员银行账户余额查询
[**accountQueryQuota**](MWallet.md#accountQueryQuota) | **POST** /rest/v1.0/m-wallet/account/query-quota | 会员账户限额查询
[**account_face_certify_open**](MWallet.md#account_face_certify_open) | **POST** /rest/v1.0/m-wallet/account/face-certify-open | 开立钱包账户(支持人脸识别)
[**account_open_notify**](MWallet.md#account_open_notify) | **POST** /rest/v1.0/m-wallet/account/open/notify | 钱包开户成功通知
[**account_open_v1_0**](MWallet.md#account_open_v1_0) | **POST** /rest/v1.0/m-wallet/account/open | 开立钱包账户
[**account_query_quota**](MWallet.md#account_query_quota) | **POST** /rest/v1.0/m-wallet/account/query-quota | 会员账户限额查询
[**account_query_v1_0**](MWallet.md#account_query_v1_0) | **GET** /rest/v1.0/m-wallet/account/query | 查询钱包账户信息
[**agreementPaymentCancel**](MWallet.md#agreementPaymentCancel) | **POST** /rest/v1.0/m-wallet/agreement/payment-cancel | 发起免密支付解约
[**agreementPaymentQuery**](MWallet.md#agreementPaymentQuery) | **POST** /rest/v1.0/m-wallet/agreement/payment-query | 钱包免密支付协议查询接口
[**agreementPaymentRequest**](MWallet.md#agreementPaymentRequest) | **POST** /rest/v1.0/m-wallet/agreement/payment-request | 钱包免密支付协议请求接口
[**agreementPaymentSign**](MWallet.md#agreementPaymentSign) | **POST** /rest/v1.0/m-wallet/agreement/payment-sign | 发起免密支付签约
[**agreement_payment_cancel_v1_0**](MWallet.md#agreement_payment_cancel_v1_0) | **POST** /rest/v1.0/m-wallet/agreement/payment-cancel | 发起免密支付解约
[**agreement_payment_cancel_web3_v1_0**](MWallet.md#agreement_payment_cancel_web3_v1_0) | **POST** /rest/v1.0/m-wallet/web3/agreement/payment-cancel | web3发起免密支付解约
[**agreement_payment_notify_web3**](MWallet.md#agreement_payment_notify_web3) | **POST** /rest/v1.0/m-wallet/web3/agreement/notify | 协议通知商户
[**agreement_payment_query**](MWallet.md#agreement_payment_query) | **POST** /rest/v1.0/m-wallet/agreement/payment-query | 钱包免密支付协议查询接口
[**agreement_payment_query_web3_v1_0**](MWallet.md#agreement_payment_query_web3_v1_0) | **GET** /rest/v1.0/m-wallet/web3/agreement/payment-query | web3钱包免密支付协议查询接口
[**agreement_payment_request_v1**](MWallet.md#agreement_payment_request_v1) | **POST** /rest/v1.0/m-wallet/agreement/payment-request | 钱包免密支付协议请求接口
[**agreement_payment_sign_v1_0**](MWallet.md#agreement_payment_sign_v1_0) | **POST** /rest/v1.0/m-wallet/agreement/payment-sign | 发起免密支付签约
[**agreement_payment_sign_web3_v1_0**](MWallet.md#agreement_payment_sign_web3_v1_0) | **POST** /rest/v1.0/m-wallet/web3/agreement/payment-sign | web3发起免密支付签约
[**autoWithdraw**](MWallet.md#autoWithdraw) | **POST** /rest/v1.0/m-wallet/auto-withdraw | 发起会员自动提现
[**autoWithdrawQuery**](MWallet.md#autoWithdrawQuery) | **POST** /rest/v1.0/m-wallet/auto-withdraw-query | 自动提现查询
[**auto_deduction_create**](MWallet.md#auto_deduction_create) | **POST** /rest/v1.0/m-wallet/trade/auto-deduction/create | 会员自动扣款下单
[**auto_deduction_query**](MWallet.md#auto_deduction_query) | **POST** /rest/v1.0/m-wallet/trade/auto-deduction/query | 会员自动扣款查询
[**auto_withdraw**](MWallet.md#auto_withdraw) | **POST** /rest/v1.0/m-wallet/auto-withdraw | 发起会员自动提现
[**auto_withdraw_query**](MWallet.md#auto_withdraw_query) | **POST** /rest/v1.0/m-wallet/auto-withdraw-query | 自动提现查询
[**bankAccountConfirm**](MWallet.md#bankAccountConfirm) | **POST** /rest/v1.0/m-wallet/bank-account/confirm | 会员银行账户开户确认
[**bankAccountOpen**](MWallet.md#bankAccountOpen) | **POST** /rest/v1.0/m-wallet/bank-account/open | 会员银行账户开户接口
[**bankAccountQueryActivation**](MWallet.md#bankAccountQueryActivation) | **GET** /rest/v1.0/m-wallet/bank-account/query-activation | 会员银行账户一分钱激活结果查询
[**bankAccountQueryComplaint**](MWallet.md#bankAccountQueryComplaint) | **GET** /rest/v1.0/m-wallet/bank-account/query-complaint | 会员银行账户客诉订单查询
[**bankAccountQueryOpenResult**](MWallet.md#bankAccountQueryOpenResult) | **GET** /rest/v1.0/m-wallet/bank-account/query-open-result | 会员银行账户开户结果查询
[**bankAccountQueryTrade**](MWallet.md#bankAccountQueryTrade) | **GET** /rest/v1.0/m-wallet/bank-account/query-trade | 会员银行账户交易流水查询
[**bankAccountQueryWithdraw**](MWallet.md#bankAccountQueryWithdraw) | **GET** /rest/v1.0/m-wallet/bank-account/query-withdraw | 会员银行账户提现查询
[**bankAccountSendMsg**](MWallet.md#bankAccountSendMsg) | **POST** /rest/v1.0/m-wallet/bank-account/send-msg | 会员银行账户开户发送短验
[**bankAccountUpdateKeyWords**](MWallet.md#bankAccountUpdateKeyWords) | **POST** /rest/v1.0/m-wallet/bank-account/update-key-words | 会员银行账户关键字维护
[**bankAccountWithdraw**](MWallet.md#bankAccountWithdraw) | **POST** /rest/v1.0/m-wallet/bank-account/withdraw | 会员银行账户提现
[**bank_account_confirm_v1_0**](MWallet.md#bank_account_confirm_v1_0) | **POST** /rest/v1.0/m-wallet/bank-account/confirm | 会员银行账户开户确认
[**bank_account_open_v1_0**](MWallet.md#bank_account_open_v1_0) | **POST** /rest/v1.0/m-wallet/bank-account/open | 会员银行账户开户接口
[**bank_account_query_activation_v1_0**](MWallet.md#bank_account_query_activation_v1_0) | **GET** /rest/v1.0/m-wallet/bank-account/query-activation | 会员银行账户一分钱激活结果查询
[**bank_account_query_complaint_v1_0**](MWallet.md#bank_account_query_complaint_v1_0) | **GET** /rest/v1.0/m-wallet/bank-account/query-complaint | 会员银行账户客诉订单查询
[**bank_account_query_open_result_v1_0**](MWallet.md#bank_account_query_open_result_v1_0) | **GET** /rest/v1.0/m-wallet/bank-account/query-open-result | 会员银行账户开户结果查询
[**bank_account_query_trade_v1_0**](MWallet.md#bank_account_query_trade_v1_0) | **GET** /rest/v1.0/m-wallet/bank-account/query-trade | 会员银行账户交易流水查询
[**bank_account_query_withdraw_v1_0**](MWallet.md#bank_account_query_withdraw_v1_0) | **GET** /rest/v1.0/m-wallet/bank-account/query-withdraw | 会员银行账户提现查询
[**bank_account_send_msg_v1_0**](MWallet.md#bank_account_send_msg_v1_0) | **POST** /rest/v1.0/m-wallet/bank-account/send-msg | 会员银行账户开户发送短验
[**bank_account_update_key_words_v1_0**](MWallet.md#bank_account_update_key_words_v1_0) | **POST** /rest/v1.0/m-wallet/bank-account/update-key-words | 会员银行账户关键字维护
[**bank_account_withdraw_v1_0**](MWallet.md#bank_account_withdraw_v1_0) | **POST** /rest/v1.0/m-wallet/bank-account/withdraw | 会员银行账户提现
[**billQueryDetail**](MWallet.md#billQueryDetail) | **POST** /rest/v1.0/m-wallet/bill/query-detail | 钱包账单详情查询
[**billQueryList**](MWallet.md#billQueryList) | **POST** /rest/v1.0/m-wallet/bill/query-list | 钱包账单列表查询
[**billQueryListV2**](MWallet.md#billQueryListV2) | **GET** /rest/v2.0/m-wallet/bill/query-list | 钱包账单列表查询
[**billQueryOverview**](MWallet.md#billQueryOverview) | **POST** /rest/v1.0/m-wallet/bill/query-overview | 钱包账单总览查询
[**bill_query_detail**](MWallet.md#bill_query_detail) | **POST** /rest/v1.0/m-wallet/bill/query-detail | 钱包账单详情查询
[**bill_query_list**](MWallet.md#bill_query_list) | **POST** /rest/v1.0/m-wallet/bill/query-list | 钱包账单列表查询
[**bill_query_overview**](MWallet.md#bill_query_overview) | **POST** /rest/v1.0/m-wallet/bill/query-overview | 钱包账单总览查询
[**cardQuery**](MWallet.md#cardQuery) | **POST** /rest/v1.0/m-wallet/card/query | 查询及绑定银行卡
[**card_query_v1_0**](MWallet.md#card_query_v1_0) | **POST** /rest/v1.0/m-wallet/card/query | 查询及绑定银行卡
[**coupon_list_query_web3**](MWallet.md#coupon_list_query_web3) | **GET** /rest/v1.0/m-wallet/web3/coupon/list-query | 优惠券列表查询
[**manageFeeQueryDeduct**](MWallet.md#manageFeeQueryDeduct) | **GET** /rest/v1.0/m-wallet/manage-fee/query-deduct | 查询用户管理费扣费时间
[**manage_fee_query_deduct**](MWallet.md#manage_fee_query_deduct) | **GET** /rest/v1.0/m-wallet/manage-fee/query-deduct | 查询用户管理费扣费时间
[**memberCardList**](MWallet.md#memberCardList) | **POST** /rest/v1.0/m-wallet/member/card-list | 会员绑卡列表查询
[**memberQuery**](MWallet.md#memberQuery) | **GET** /rest/v1.0/m-wallet/member/query | 钱包账户信息查询
[**member_card_list**](MWallet.md#member_card_list) | **POST** /rest/v1.0/m-wallet/member/card-list | 会员绑卡列表查询
[**member_query_v1_0**](MWallet.md#member_query_v1_0) | **GET** /rest/v1.0/m-wallet/member/query | 钱包账户信息查询
[**passwordManage**](MWallet.md#passwordManage) | **POST** /rest/v1.0/m-wallet/password/manage | 安全设置
[**password_manage_v1_0**](MWallet.md#password_manage_v1_0) | **POST** /rest/v1.0/m-wallet/password/manage | 安全设置
[**payment_manage_web3_v1_0**](MWallet.md#payment_manage_web3_v1_0) | **POST** /rest/v1.0/m-wallet/web3/payment-manage | 支付设置
[**rechargeInitiate**](MWallet.md#rechargeInitiate) | **POST** /rest/v1.0/m-wallet/recharge/initiate | 发起充值
[**rechargeQuery**](MWallet.md#rechargeQuery) | **GET** /rest/v1.0/m-wallet/recharge/query | 充值查询
[**recharge_initiate_v1_0**](MWallet.md#recharge_initiate_v1_0) | **POST** /rest/v1.0/m-wallet/recharge/initiate | 发起充值
[**recharge_query_v1_0**](MWallet.md#recharge_query_v1_0) | **GET** /rest/v1.0/m-wallet/recharge/query | 充值查询
[**subscribeExpireNotify**](MWallet.md#subscribeExpireNotify) | **POST** /rest/v1.0/m-wallet/subscribe-expire-notify | 会员主体订阅有效期变更通知
[**subscribe_expire_notify**](MWallet.md#subscribe_expire_notify) | **POST** /rest/v1.0/m-wallet/subscribe-expire-notify | 会员主体订阅有效期变更通知
[**tradeAutoDeductionCreate**](MWallet.md#tradeAutoDeductionCreate) | **POST** /rest/v1.0/m-wallet/trade/auto-deduction/create | 会员自动扣款下单
[**tradeAutoDeductionQuery**](MWallet.md#tradeAutoDeductionQuery) | **POST** /rest/v1.0/m-wallet/trade/auto-deduction/query | 会员自动扣款查询
[**tradeOrder**](MWallet.md#tradeOrder) | **POST** /rest/v1.0/m-wallet/trade/order | 钱包交易支付
[**tradeOrderV2**](MWallet.md#tradeOrderV2) | **POST** /rest/v2.0/m-wallet/trade/order | 钱包交易下单
[**trade_order_v1_0**](MWallet.md#trade_order_v1_0) | **POST** /rest/v1.0/m-wallet/trade/order | 钱包交易支付
[**trade_order_v2_0**](MWallet.md#trade_order_v2_0) | **POST** /rest/v2.0/m-wallet/trade/order | 钱包交易下单
[**transferB2cInitiate**](MWallet.md#transferB2cInitiate) | **POST** /rest/v1.0/m-wallet/transfer/b2c/initiate | 发起B2C转账
[**transferB2cMarket**](MWallet.md#transferB2cMarket) | **POST** /rest/v1.0/m-wallet/transfer/b2c/market | 营销红包转账
[**transferB2cQuery**](MWallet.md#transferB2cQuery) | **GET** /rest/v1.0/m-wallet/transfer/b2c/query | B2C转账查询
[**transfer_b2c_initiate_v1_0**](MWallet.md#transfer_b2c_initiate_v1_0) | **POST** /rest/v1.0/m-wallet/transfer/b2c/initiate | 发起B2C转账
[**transfer_b2c_market_v1_0**](MWallet.md#transfer_b2c_market_v1_0) | **POST** /rest/v1.0/m-wallet/transfer/b2c/market | 营销红包转账
[**transfer_b2c_query_v1_0**](MWallet.md#transfer_b2c_query_v1_0) | **GET** /rest/v1.0/m-wallet/transfer/b2c/query | B2C转账查询
[**walletCancel**](MWallet.md#walletCancel) | **POST** /rest/v1.0/m-wallet/wallet/cancel | 注销会员钱包
[**walletIndexV2**](MWallet.md#walletIndexV2) | **POST** /rest/v2.0/m-wallet/wallet/index | 钱包注册/登录接口
[**wallet_cancel_v1_0**](MWallet.md#wallet_cancel_v1_0) | **POST** /rest/v1.0/m-wallet/wallet/cancel | 注销会员钱包
[**wallet_index_v2_0**](MWallet.md#wallet_index_v2_0) | **POST** /rest/v2.0/m-wallet/wallet/index | 钱包注册/登录接口
[**web3AgreementNotify**](MWallet.md#web3AgreementNotify) | **POST** /rest/v1.0/m-wallet/web3/agreement/notify | 协议通知商户
[**web3AgreementPaymentCancel**](MWallet.md#web3AgreementPaymentCancel) | **POST** /rest/v1.0/m-wallet/web3/agreement/payment-cancel | web3发起免密支付解约
[**web3AgreementPaymentQuery**](MWallet.md#web3AgreementPaymentQuery) | **GET** /rest/v1.0/m-wallet/web3/agreement/payment-query | web3钱包免密支付协议查询接口
[**web3AgreementPaymentSign**](MWallet.md#web3AgreementPaymentSign) | **POST** /rest/v1.0/m-wallet/web3/agreement/payment-sign | web3发起免密支付签约
[**web3CouponListQuery**](MWallet.md#web3CouponListQuery) | **GET** /rest/v1.0/m-wallet/web3/coupon/list-query | 优惠券列表查询
[**web3PaymentManage**](MWallet.md#web3PaymentManage) | **POST** /rest/v1.0/m-wallet/web3/payment-manage | 支付设置
[**withdrawInitiate**](MWallet.md#withdrawInitiate) | **POST** /rest/v1.0/m-wallet/withdraw/initiate | 发起提现
[**withdrawQuery**](MWallet.md#withdrawQuery) | **GET** /rest/v1.0/m-wallet/withdraw/query | 提现查询
[**withdraw_initiate_v1_0**](MWallet.md#withdraw_initiate_v1_0) | **POST** /rest/v1.0/m-wallet/withdraw/initiate | 发起提现
[**withdraw_query_v1_0**](MWallet.md#withdraw_query_v1_0) | **GET** /rest/v1.0/m-wallet/withdraw/query | 提现查询


# **accountFaceCertifyOpen**
AccountFaceCertifyOpenResponse accountFaceCertifyOpen(AccountFaceCertifyOpenRequest request)

开立钱包账户(支持人脸识别)

商户调用此接口，输入用户的真实身份信息，易宝进行人脸识别认证通过后，会对应开立钱包账户。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountFaceCertifyOpenRequest();
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setMobile("mobile_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->accountFaceCertifyOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->accountFaceCertifyOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletOpenByFaceResponseDTO**](../Model/WalletOpenByFaceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountOpen**
AccountOpenResponse accountOpen(AccountOpenRequest request)

开立钱包账户

<p>商户调用此接口，输入用户的真实身份信息，易宝通过公安认证渠道认证通过后，会对应开立钱包账户。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountOpenRequest();
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setMobile("mobile_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->accountOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->accountOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletRequestRecordResponseDTO**](../Model/WalletRequestRecordResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountOpenNotify**
AccountOpenNotifyResponse accountOpenNotify(AccountOpenNotifyRequest request)

钱包开户成功通知

调用此接口，通知商户开户成功结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountOpenNotifyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setWalletUserNo("walletUserNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setBusinessNo("businessNo_example");

try {
    $response = $api_client->accountOpenNotify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->accountOpenNotify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **walletUserNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **businessNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\OpenSuccessNotifyResponseDTO**](../Model/OpenSuccessNotifyResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountQuery**
AccountQueryResponse accountQuery(AccountQueryRequest request)

查询钱包账户信息

<p>商户在易宝为会员开通钱包账户后，可通过接入该接口查询会员在易宝的钱包账户信息，包括钱包用户个人信息、钱包账户状态、钱包余额、认证情况及账户级别等</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryRequest();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->accountQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->accountQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**| 商户用户ID |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletMemberResponseDTO**](../Model/WalletMemberResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountQueryBalance**
AccountQueryBalanceResponse accountQueryBalance(AccountQueryBalanceRequest request)

会员银行账户余额查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryBalanceRequest();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setAccountType("accountType_example");
$request->setElecAccount("elecAccount_example");

try {
    $response = $api_client->accountQueryBalance($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->accountQueryBalance: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**| 商户侧存的会员编号，不同人的会员编号不能相同 |
 **parentMerchantNo** | **string**| 发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **accountType** | **string**| 可选项如下:&lt;br&gt;CNCB:中信银行 | [optional]
 **elecAccount** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryBalanceQueryBalanceResponseDTOResult**](../Model/AccountQueryBalanceQueryBalanceResponseDTOResult.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **accountQueryQuota**
AccountQueryQuotaResponse accountQueryQuota(AccountQueryQuotaRequest request)

会员账户限额查询

商户调用该接口，查询会员账户限额信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryQuotaRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");

try {
    $response = $api_client->accountQueryQuota($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->accountQueryQuota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\YopQueryMemberBalanceQuotaRespDTO**](../Model/YopQueryMemberBalanceQuotaRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_face_certify_open**
AccountFaceCertifyOpenResponse account_face_certify_open(AccountFaceCertifyOpenRequest request)

开立钱包账户(支持人脸识别)

商户调用此接口，输入用户的真实身份信息，易宝进行人脸识别认证通过后，会对应开立钱包账户。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountFaceCertifyOpenRequest();
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setMobile("mobile_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->account_face_certify_open($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->account_face_certify_open: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletOpenByFaceResponseDTO**](../Model/WalletOpenByFaceResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_open_notify**
AccountOpenNotifyResponse account_open_notify(AccountOpenNotifyRequest request)

钱包开户成功通知

调用此接口，通知商户开户成功结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountOpenNotifyRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setWalletUserNo("walletUserNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setBusinessNo("businessNo_example");

try {
    $response = $api_client->account_open_notify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->account_open_notify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **walletUserNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **businessNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\OpenSuccessNotifyResponseDTO**](../Model/OpenSuccessNotifyResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_open_v1_0**
AccountOpenV10Response account_open_v1_0(AccountOpenV10Request request)

开立钱包账户

<p>商户调用此接口，输入用户的真实身份信息，易宝通过公安认证渠道认证通过后，会对应开立钱包账户。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountOpenV10Request();
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setMobile("mobile_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->account_open_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->account_open_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletRequestRecordResponseDTO**](../Model/WalletRequestRecordResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_query_quota**
AccountQueryQuotaResponse account_query_quota(AccountQueryQuotaRequest request)

会员账户限额查询

商户调用该接口，查询会员账户限额信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryQuotaRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");

try {
    $response = $api_client->account_query_quota($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->account_query_quota: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\YopQueryMemberBalanceQuotaRespDTO**](../Model/YopQueryMemberBalanceQuotaRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **account_query_v1_0**
AccountQueryV10Response account_query_v1_0(AccountQueryV10Request request)

查询钱包账户信息

<p>商户在易宝为会员开通钱包账户后，可通过接入该接口查询会员在易宝的钱包账户信息，包括钱包用户个人信息、钱包账户状态、钱包余额、认证情况及账户级别等</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryV10Request();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->account_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->account_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**| 商户用户ID |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletMemberResponseDTO**](../Model/WalletMemberResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreementPaymentCancel**
AgreementPaymentCancelResponse agreementPaymentCancel(AgreementPaymentCancelRequest request)

发起免密支付解约

用户在商户端发起协议解约，商户调用此接口发起解约操作。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentCancelRequest();
$request->setOperateReason("operateReason_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->agreementPaymentCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreementPaymentCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operateReason** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretCancelResponseDTO**](../Model/FreeSecretCancelResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreementPaymentQuery**
AgreementPaymentQueryResponse agreementPaymentQuery(AgreementPaymentQueryRequest request)

钱包免密支付协议查询接口

钱包免密支付协议查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");

try {
    $response = $api_client->agreementPaymentQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreementPaymentQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretQueryResponseDTO**](../Model/FreeSecretQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreementPaymentRequest**
AgreementPaymentRequestResponse agreementPaymentRequest(AgreementPaymentRequestRequest request)

钱包免密支付协议请求接口

钱包免密支付协议请求接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentRequestRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setRequestNo("requestNo_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->agreementPaymentRequest($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreementPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreementPaymentSign**
AgreementPaymentSignResponse agreementPaymentSign(AgreementPaymentSignRequest request)

发起免密支付签约

用户在商户端发起协议签约，商户调用此接口并打开对应url跳转到易宝验密签约页面，用户输入支付密码后验证并签约。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentSignRequest();
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->agreementPaymentSign($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreementPaymentSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreement_payment_cancel_v1_0**
AgreementPaymentCancelV10Response agreement_payment_cancel_v1_0(AgreementPaymentCancelV10Request request)

发起免密支付解约

用户在商户端发起协议解约，商户调用此接口发起解约操作。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentCancelV10Request();
$request->setOperateReason("operateReason_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->agreement_payment_cancel_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreement_payment_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operateReason** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretCancelResponseDTO**](../Model/FreeSecretCancelResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreement_payment_cancel_web3_v1_0**
AgreementPaymentCancelWeb3V10Response agreement_payment_cancel_web3_v1_0(AgreementPaymentCancelWeb3V10Request request)

web3发起免密支付解约

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentCancelWeb3V10Request();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOperateReason("operateReason_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->agreement_payment_cancel_web3_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreement_payment_cancel_web3_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**|  | [optional]
 **operateReason** | **string**|  | [optional]
 **operatedMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretCancelRespDTO**](../Model/FreeSecretCancelRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreement_payment_notify_web3**
AgreementPaymentNotifyWeb3Response agreement_payment_notify_web3(AgreementPaymentNotifyWeb3Request request)

协议通知商户

协议通知商户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentNotifyWeb3Request();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOperateTime("operateTime_example");
$request->setOperateType("operateType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setEndTime("endTime_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->agreement_payment_notify_web3($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreement_payment_notify_web3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**|  | [optional]
 **operateTime** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **endTime** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretNotifyRespDTO**](../Model/FreeSecretNotifyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreement_payment_query**
AgreementPaymentQueryResponse agreement_payment_query(AgreementPaymentQueryRequest request)

钱包免密支付协议查询接口

钱包免密支付协议查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");

try {
    $response = $api_client->agreement_payment_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreement_payment_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretQueryResponseDTO**](../Model/FreeSecretQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreement_payment_query_web3_v1_0**
AgreementPaymentQueryWeb3V10Response agreement_payment_query_web3_v1_0(AgreementPaymentQueryWeb3V10Request request)

web3钱包免密支付协议查询接口

钱包免密支付协议查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentQueryWeb3V10Request();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");

try {
    $response = $api_client->agreement_payment_query_web3_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreement_payment_query_web3_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**| &lt;p&gt;商户用户id&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&amp;nbsp;易宝支付分配的的商户唯一标识&lt;/p&gt; |
 **operatedMerchantNo** | **string**| &lt;p&gt;代托管商编&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretQueryRespDTO**](../Model/FreeSecretQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreement_payment_request_v1**
AgreementPaymentRequestV1Response agreement_payment_request_v1(AgreementPaymentRequestV1Request request)

钱包免密支付协议请求接口

钱包免密支付协议请求接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentRequestV1Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setRequestNo("requestNo_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->agreement_payment_request_v1($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreement_payment_request_v1: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreement_payment_sign_v1_0**
AgreementPaymentSignV10Response agreement_payment_sign_v1_0(AgreementPaymentSignV10Request request)

发起免密支付签约

用户在商户端发起协议签约，商户调用此接口并打开对应url跳转到易宝验密签约页面，用户输入支付密码后验证并签约。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentSignV10Request();
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->agreement_payment_sign_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreement_payment_sign_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **agreement_payment_sign_web3_v1_0**
AgreementPaymentSignWeb3V10Response agreement_payment_sign_web3_v1_0(AgreementPaymentSignWeb3V10Request request)

web3发起免密支付签约

用户在商户端发起协议签约，商户调用此接口并打开对应url跳转到易宝验密签约页面，用户输入支付密码后验证并签约。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AgreementPaymentSignWeb3V10Request();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setReturnUrl("returnUrl_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->agreement_payment_sign_web3_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->agreement_payment_sign_web3_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**|  | [optional]
 **operatedMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretSignRespDTO**](../Model/FreeSecretSignRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **autoWithdraw**
AutoWithdrawResponse autoWithdraw(AutoWithdrawRequest request)

发起会员自动提现

发起会员自动提现，用户可查询自动提现结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawRequest();
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("User8232");
$request->setRequestNo("requestNo_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->autoWithdraw($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->autoWithdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operatedMerchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawResponseDTO**](../Model/AutoWithdrawResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **autoWithdrawQuery**
AutoWithdrawQueryResponse autoWithdrawQuery(AutoWithdrawQueryRequest request)

自动提现查询

自动提现 订单 查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawQueryRequest();
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("REQ6437657876");

try {
    $response = $api_client->autoWithdrawQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->autoWithdrawQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operatedMerchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawQueryResponseDTO**](../Model/AutoWithdrawQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **auto_deduction_create**
AutoDeductionCreateResponse auto_deduction_create(AutoDeductionCreateRequest request)

会员自动扣款下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AutoDeductionCreateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setRequestNo("requestNo_example");
$request->setAmount("amount_example");
$request->setBindCardId("bindCardId_example");
$request->setPayWay("payWay_example");
$request->setExpireTime(new \DateTime("2013-10-20 19:20:30"));
$request->setGoodsName("goodsName_example");

try {
    $response = $api_client->auto_deduction_create($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->auto_deduction_create: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **bindCardId** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **expireTime** | **\DateTime**|  | [optional]
 **goodsName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoDeductionResponseDTO**](../Model/AutoDeductionResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **auto_deduction_query**
AutoDeductionQueryResponse auto_deduction_query(AutoDeductionQueryRequest request)

会员自动扣款查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AutoDeductionQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->auto_deduction_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->auto_deduction_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoDeductionQueryResponseDTO**](../Model/AutoDeductionQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **auto_withdraw**
AutoWithdrawResponse auto_withdraw(AutoWithdrawRequest request)

发起会员自动提现

发起会员自动提现，用户可查询自动提现结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawRequest();
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("User8232");
$request->setRequestNo("requestNo_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->auto_withdraw($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->auto_withdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operatedMerchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawResponseDTO**](../Model/AutoWithdrawResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **auto_withdraw_query**
AutoWithdrawQueryResponse auto_withdraw_query(AutoWithdrawQueryRequest request)

自动提现查询

自动提现 订单 查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawQueryRequest();
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("REQ6437657876");

try {
    $response = $api_client->auto_withdraw_query($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->auto_withdraw_query: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operatedMerchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawQueryResponseDTO**](../Model/AutoWithdrawQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountConfirm**
BankAccountConfirmResponse bankAccountConfirm(BankAccountConfirmRequest request)

会员银行账户开户确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountConfirmRequest();
$request->setRequestNo("requestNo_example");
$request->setShortMsg("shortMsg_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountConfirm($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountConfirm: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **shortMsg** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\ConfirmBankAccountResponseDTO**](../Model/ConfirmBankAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountOpen**
BankAccountOpenResponse bankAccountOpen(BankAccountOpenRequest request)

会员银行账户开户接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountOpenRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountRequestDTO());

try {
    $response = $api_client->bankAccountOpen($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountOpen: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountRequestDTO**](../Model/BankAccountRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountResponseDTO**](../Model/BankAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bankAccountQueryActivation**
BankAccountQueryActivationResponse bankAccountQueryActivation(BankAccountQueryActivationRequest request)

会员银行账户一分钱激活结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryActivationRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountQueryActivation($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryActivation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 同一分钱激活里的请求号 |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBankAccountActivationRespDTO**](../Model/QueryBankAccountActivationRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryComplaint**
BankAccountQueryComplaintResponse bankAccountQueryComplaint(BankAccountQueryComplaintRequest request)

会员银行账户客诉订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryComplaintRequest();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setAccountNo("accountNo_example");
$request->setBankTradeNo("bankTradeNo_example");
$request->setTradeTime("tradeTime_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountQueryComplaint($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryComplaint: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**| 商户侧会员编号&lt;br&gt;商户侧存的会员编号，不同人的会员编号不能相同 |
 **accountNo** | **string**| 电子账户号 |
 **bankTradeNo** | **string**| 银行支付流水号 |
 **tradeTime** | **string**| 订单交易日期&lt;br&gt;参数格式为：yyyyMMdd |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryComplaintOrderRespDTO**](../Model/QueryComplaintOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryOpenResult**
BankAccountQueryOpenResultResponse bankAccountQueryOpenResult(BankAccountQueryOpenResultRequest request)

会员银行账户开户结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryOpenResultRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountQueryOpenResult($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryOpenResult: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户请求号&lt;br&gt;同开户申请的接口请求号一致 |
 **parentMerchantNo** | **string**| 业务方发起商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryOpenResultResponseDTO**](../Model/QueryOpenResultResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryTrade**
BankAccountQueryTradeResponse bankAccountQueryTrade(BankAccountQueryTradeRequest request)

会员银行账户交易流水查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryTradeRequest();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setAccountNo("accountNo_example");
$request->setBeginDate("beginDate_example");
$request->setEndDate("endDate_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setLoanFlag("loanFlag_example");
$request->setStartNum(56);
$request->setQueryNum(56);
$request->setQueryToken("queryToken_example");
$request->setQueryTime("queryTime_example");

try {
    $response = $api_client->bankAccountQueryTrade($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryTrade: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**| 商户侧会员编号&lt;br&gt;商户侧存的会员编号，不同人的会员编号不能相同 |
 **accountNo** | **string**| 电子账号 |
 **beginDate** | **string**| 起始日期&lt;br&gt;日期参数格式（yyyyMMdd）&lt;br&gt;起始日期和截止日期间隔不能超过6个月 |
 **endDate** | **string**| 截至日期&lt;br&gt;日期参数格式（yyyyMMdd）&lt;br&gt;起始日期和截止日期间隔不能超过6个月 |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商编&lt;br&gt;商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **loanFlag** | **string**| 借贷标志&lt;br&gt;可选项如下:&lt;br&gt;INCOME:收入&lt;br&gt;PAY:支出 | [optional]
 **startNum** | **int**| 起始记录号&lt;br&gt;按此值查询其后交易流水，不填的话，默认是1。传1是首次查询，传其他值是非首次查询，非首次查询需要传queryToken和queryTime | [optional]
 **queryNum** | **int**| 查询条数&lt;br&gt;不填的话默认是10，最大条数99 | [optional]
 **queryToken** | **string**| 查询token&lt;br&gt;首次查询不用传，非首次查询传上次查询的返回queryToken | [optional]
 **queryTime** | **string**| 查询时间戳&lt;br&gt;首次查询不用传，非首次查询传上次查询的返回值queryTime | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBankAccountTradeRespDTO**](../Model/QueryBankAccountTradeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountQueryWithdraw**
BankAccountQueryWithdrawResponse bankAccountQueryWithdraw(BankAccountQueryWithdrawRequest request)

会员银行账户提现查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryWithdrawRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountQueryWithdraw($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountQueryWithdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户请求号&lt;br&gt;同会员银行账户提现接口的请求号 |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBankAccountWithDrawRespDTO**](../Model/QueryBankAccountWithDrawRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountSendMsg**
BankAccountSendMsgResponse bankAccountSendMsg(BankAccountSendMsgRequest request)

会员银行账户开户发送短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountSendMsgRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountSendMsg($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountSendMsg: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantMemberNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankShortMsgResponseDTO**](../Model/BankShortMsgResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountUpdateKeyWords**
BankAccountUpdateKeyWordsResponse bankAccountUpdateKeyWords(BankAccountUpdateKeyWordsRequest request)

会员银行账户关键字维护

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountUpdateKeyWordsRequest();
$request->setOperateType("operateType_example");
$request->setKeyWordStrs("keyWordStrs_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountUpdateKeyWords($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountUpdateKeyWords: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operateType** | **string**|  | [optional]
 **keyWordStrs** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankKeyWordsResponseDTO**](../Model/BankKeyWordsResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bankAccountWithdraw**
BankAccountWithdrawResponse bankAccountWithdraw(BankAccountWithdrawRequest request)

会员银行账户提现

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountWithdrawRequest();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setRequestNo("requestNo_example");
$request->setAccountNo("accountNo_example");
$request->setAccountType("accountType_example");
$request->setOneAccountBankNo("oneAccountBankNo_example");
$request->setBindBankPhone("bindBankPhone_example");
$request->setWithdrawPrice(1.2);
$request->setRemark("remark_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bankAccountWithdraw($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bankAccountWithdraw: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]
 **oneAccountBankNo** | **string**|  | [optional]
 **bindBankPhone** | **string**|  | [optional]
 **withdrawPrice** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountWithDrawRespDTO**](../Model/BankAccountWithDrawRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_confirm_v1_0**
BankAccountConfirmV10Response bank_account_confirm_v1_0(BankAccountConfirmV10Request request)

会员银行账户开户确认

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountConfirmV10Request();
$request->setRequestNo("requestNo_example");
$request->setShortMsg("shortMsg_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_confirm_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_confirm_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **shortMsg** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\ConfirmBankAccountResponseDTO**](../Model/ConfirmBankAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_open_v1_0**
BankAccountOpenV10Response bank_account_open_v1_0(BankAccountOpenV10Request request)

会员银行账户开户接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountOpenV10Request();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountRequestDTO());

try {
    $response = $api_client->bank_account_open_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_open_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountRequestDTO**](../Model/BankAccountRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountResponseDTO**](../Model/BankAccountResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **bank_account_query_activation_v1_0**
BankAccountQueryActivationV10Response bank_account_query_activation_v1_0(BankAccountQueryActivationV10Request request)

会员银行账户一分钱激活结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryActivationV10Request();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_query_activation_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_query_activation_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 同一分钱激活里的请求号 |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBankAccountActivationRespDTO**](../Model/QueryBankAccountActivationRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_query_complaint_v1_0**
BankAccountQueryComplaintV10Response bank_account_query_complaint_v1_0(BankAccountQueryComplaintV10Request request)

会员银行账户客诉订单查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryComplaintV10Request();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setAccountNo("accountNo_example");
$request->setBankTradeNo("bankTradeNo_example");
$request->setTradeTime("tradeTime_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_query_complaint_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_query_complaint_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**| 商户侧会员编号&lt;br&gt;商户侧存的会员编号，不同人的会员编号不能相同 |
 **accountNo** | **string**| 电子账户号 |
 **bankTradeNo** | **string**| 银行支付流水号 |
 **tradeTime** | **string**| 订单交易日期&lt;br&gt;参数格式为：yyyyMMdd |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryComplaintOrderRespDTO**](../Model/QueryComplaintOrderRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_query_open_result_v1_0**
BankAccountQueryOpenResultV10Response bank_account_query_open_result_v1_0(BankAccountQueryOpenResultV10Request request)

会员银行账户开户结果查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryOpenResultV10Request();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_query_open_result_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_query_open_result_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户请求号&lt;br&gt;同开户申请的接口请求号一致 |
 **parentMerchantNo** | **string**| 业务方发起商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryOpenResultResponseDTO**](../Model/QueryOpenResultResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_query_trade_v1_0**
BankAccountQueryTradeV10Response bank_account_query_trade_v1_0(BankAccountQueryTradeV10Request request)

会员银行账户交易流水查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryTradeV10Request();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setAccountNo("accountNo_example");
$request->setBeginDate("beginDate_example");
$request->setEndDate("endDate_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setLoanFlag("loanFlag_example");
$request->setStartNum(56);
$request->setQueryNum(56);
$request->setQueryToken("queryToken_example");
$request->setQueryTime("queryTime_example");

try {
    $response = $api_client->bank_account_query_trade_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_query_trade_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**| 商户侧会员编号&lt;br&gt;商户侧存的会员编号，不同人的会员编号不能相同 |
 **accountNo** | **string**| 电子账号 |
 **beginDate** | **string**| 起始日期&lt;br&gt;日期参数格式（yyyyMMdd）&lt;br&gt;起始日期和截止日期间隔不能超过6个月 |
 **endDate** | **string**| 截至日期&lt;br&gt;日期参数格式（yyyyMMdd）&lt;br&gt;起始日期和截止日期间隔不能超过6个月 |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商编&lt;br&gt;商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **loanFlag** | **string**| 借贷标志&lt;br&gt;可选项如下:&lt;br&gt;INCOME:收入&lt;br&gt;PAY:支出 | [optional]
 **startNum** | **int**| 起始记录号&lt;br&gt;按此值查询其后交易流水，不填的话，默认是1。传1是首次查询，传其他值是非首次查询，非首次查询需要传queryToken和queryTime | [optional]
 **queryNum** | **int**| 查询条数&lt;br&gt;不填的话默认是10，最大条数99 | [optional]
 **queryToken** | **string**| 查询token&lt;br&gt;首次查询不用传，非首次查询传上次查询的返回queryToken | [optional]
 **queryTime** | **string**| 查询时间戳&lt;br&gt;首次查询不用传，非首次查询传上次查询的返回值queryTime | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBankAccountTradeRespDTO**](../Model/QueryBankAccountTradeRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_query_withdraw_v1_0**
BankAccountQueryWithdrawV10Response bank_account_query_withdraw_v1_0(BankAccountQueryWithdrawV10Request request)

会员银行账户提现查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountQueryWithdrawV10Request();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_query_withdraw_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_query_withdraw_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户请求号&lt;br&gt;同会员银行账户提现接口的请求号 |
 **parentMerchantNo** | **string**| 业务发起方商编&lt;br&gt;发起方商户编号&lt;br&gt;（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBankAccountWithDrawRespDTO**](../Model/QueryBankAccountWithDrawRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_send_msg_v1_0**
BankAccountSendMsgV10Response bank_account_send_msg_v1_0(BankAccountSendMsgV10Request request)

会员银行账户开户发送短验

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountSendMsgV10Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_send_msg_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_send_msg_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **merchantMemberNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankShortMsgResponseDTO**](../Model/BankShortMsgResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_update_key_words_v1_0**
BankAccountUpdateKeyWordsV10Response bank_account_update_key_words_v1_0(BankAccountUpdateKeyWordsV10Request request)

会员银行账户关键字维护

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountUpdateKeyWordsV10Request();
$request->setOperateType("operateType_example");
$request->setKeyWordStrs("keyWordStrs_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_update_key_words_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_update_key_words_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **operateType** | **string**|  | [optional]
 **keyWordStrs** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankKeyWordsResponseDTO**](../Model/BankKeyWordsResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bank_account_withdraw_v1_0**
BankAccountWithdrawV10Response bank_account_withdraw_v1_0(BankAccountWithdrawV10Request request)

会员银行账户提现

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountWithdrawV10Request();
$request->setMerchantMemberNo("merchantMemberNo_example");
$request->setRequestNo("requestNo_example");
$request->setAccountNo("accountNo_example");
$request->setAccountType("accountType_example");
$request->setOneAccountBankNo("oneAccountBankNo_example");
$request->setBindBankPhone("bindBankPhone_example");
$request->setWithdrawPrice(1.2);
$request->setRemark("remark_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->bank_account_withdraw_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bank_account_withdraw_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantMemberNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **accountNo** | **string**|  | [optional]
 **accountType** | **string**|  | [optional]
 **oneAccountBankNo** | **string**|  | [optional]
 **bindBankPhone** | **string**|  | [optional]
 **withdrawPrice** | **float**|  | [optional]
 **remark** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountWithDrawRespDTO**](../Model/BankAccountWithDrawRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billQueryDetail**
BillQueryDetailResponse billQueryDetail(BillQueryDetailRequest request)

钱包账单详情查询

商户通过调用该接口，查询账单详情信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BillQueryDetailRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setOrderType("orderType_example");
$request->setOrderDate(new \DateTime("2013-10-20 19:20:30"));

try {
    $response = $api_client->billQueryDetail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->billQueryDetail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **orderType** | **string**|  | [optional]
 **orderDate** | **\DateTime**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BillDetailResponseDto**](../Model/BillDetailResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billQueryList**
BillQueryListResponse billQueryList(BillQueryListRequest request)

钱包账单列表查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BillQueryListRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOrderType("orderType_example");
$request->setPage(56);
$request->setPageNum(56);
$request->setEndTime(new \DateTime("2013-10-20 19:20:30"));

try {
    $response = $api_client->billQueryList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->billQueryList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **orderType** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **pageNum** | **int**|  | [optional]
 **endTime** | **\DateTime**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BillListResponseDto**](../Model/BillListResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billQueryListV2**
BillQueryListV2Response billQueryListV2(BillQueryListV2Request request)

钱包账单列表查询

商户通过调用该接口，查询账单列表信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BillQueryListV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setPage(56);
$request->setPageNum(56);
$request->setEndTime("endTime_example");
$request->setOrderType("orderType_example");
$request->setFundDirection("fundDirection_example");

try {
    $response = $api_client->billQueryListV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->billQueryListV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| &lt;p&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号）&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;易宝支付分配的的商户唯一标识&lt;/p&gt; |
 **merchantUserNo** | **string**| &lt;p&gt;商户用户id&lt;/p&gt; |
 **page** | **int**| &lt;p&gt;查询页数&lt;/p&gt; |
 **pageNum** | **int**| &lt;p&gt;每页条数&lt;/p&gt; |
 **endTime** | **string**| &lt;p&gt;查询截止时间时间格式：yyyy-MM-dd HH:mm:ss&lt;/p&gt; |
 **orderType** | **string**| &lt;p&gt;订单类型&lt;/p&gt; 可选项如下: WITHDRAW:提现 RECHARGE:充值 PAYMENT:支付 DIVIDE:分账 DIVIDE_REFUND:分账退回 REFUND:退款 PAYMENT_MANAGE:管理费 BONUS:红包 | [optional]
 **fundDirection** | **string**| &lt;p&gt;资金方向&lt;/p&gt; 可选项如下: IN:入金 OUT:出金 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BillListResponseDto**](../Model/BillListResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **billQueryOverview**
BillQueryOverviewResponse billQueryOverview(BillQueryOverviewRequest request)

钱包账单总览查询

商户调用该接口，查询钱包账单总览信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BillQueryOverviewRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setStartMonth("startMonth_example");
$request->setEndMonth("endMonth_example");

try {
    $response = $api_client->billQueryOverview($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->billQueryOverview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **startMonth** | **string**|  | [optional]
 **endMonth** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BillOverviewResponseDto**](../Model/BillOverviewResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bill_query_detail**
BillQueryDetailResponse bill_query_detail(BillQueryDetailRequest request)

钱包账单详情查询

商户通过调用该接口，查询账单详情信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BillQueryDetailRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setUniqueOrderNo("uniqueOrderNo_example");
$request->setOrderType("orderType_example");
$request->setOrderDate(new \DateTime("2013-10-20 19:20:30"));

try {
    $response = $api_client->bill_query_detail($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bill_query_detail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **uniqueOrderNo** | **string**|  | [optional]
 **orderType** | **string**|  | [optional]
 **orderDate** | **\DateTime**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BillDetailResponseDto**](../Model/BillDetailResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bill_query_list**
BillQueryListResponse bill_query_list(BillQueryListRequest request)

钱包账单列表查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BillQueryListRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOrderType("orderType_example");
$request->setPage(56);
$request->setPageNum(56);
$request->setEndTime(new \DateTime("2013-10-20 19:20:30"));

try {
    $response = $api_client->bill_query_list($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bill_query_list: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **orderType** | **string**|  | [optional]
 **page** | **int**|  | [optional]
 **pageNum** | **int**|  | [optional]
 **endTime** | **\DateTime**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BillListResponseDto**](../Model/BillListResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **bill_query_overview**
BillQueryOverviewResponse bill_query_overview(BillQueryOverviewRequest request)

钱包账单总览查询

商户调用该接口，查询钱包账单总览信息

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\BillQueryOverviewRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setStartMonth("startMonth_example");
$request->setEndMonth("endMonth_example");

try {
    $response = $api_client->bill_query_overview($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->bill_query_overview: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **startMonth** | **string**|  | [optional]
 **endMonth** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\BillOverviewResponseDto**](../Model/BillOverviewResponseDto.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **cardQuery**
CardQueryResponse cardQuery(CardQueryRequest request)

查询及绑定银行卡

<p>商户调用该接口，易宝返回url可跳转至对应用户的银行卡列表，此页面支持用户查询绑卡列表、绑定新卡和解绑已有银行卡。</p> <p>绑定银行卡：用户在银行卡列表页申请绑定新卡，提交银行卡信息（包括姓银行卡号、手机号）申请绑定银行卡，完成银行卡信息认证；同时系统会根据认证渠道规则升级用户钱包账户。</p> <p>解绑银行卡：用户在银行卡列表页申请解绑银行卡，确认支付密码完成解绑。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\CardQueryRequest();
$request->setReturnUrl("returnUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->cardQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->cardQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **card_query_v1_0**
CardQueryV10Response card_query_v1_0(CardQueryV10Request request)

查询及绑定银行卡

<p>商户调用该接口，易宝返回url可跳转至对应用户的银行卡列表，此页面支持用户查询绑卡列表、绑定新卡和解绑已有银行卡。</p> <p>绑定银行卡：用户在银行卡列表页申请绑定新卡，提交银行卡信息（包括姓银行卡号、手机号）申请绑定银行卡，完成银行卡信息认证；同时系统会根据认证渠道规则升级用户钱包账户。</p> <p>解绑银行卡：用户在银行卡列表页申请解绑银行卡，确认支付密码完成解绑。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\CardQueryV10Request();
$request->setReturnUrl("returnUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->card_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->card_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **coupon_list_query_web3**
CouponListQueryWeb3Response coupon_list_query_web3(CouponListQueryWeb3Request request)

优惠券列表查询

适配WEB3优惠券列表查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\CouponListQueryWeb3Request();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setQueryType("queryType_example");
$request->setApplyEndTime("applyEndTime_example");
$request->setPageNo(56);
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setPageSize(56);
$request->setApplyStartTime("applyStartTime_example");

try {
    $response = $api_client->coupon_list_query_web3($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->coupon_list_query_web3: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**| &lt;p&gt;外部用户标识&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号）&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号 易宝支付分配的的商户唯一标识&lt;/p&gt; |
 **queryType** | **string**| &lt;p&gt;查询类型&lt;/p&gt; 可选项如下: NOT_USE:未使用 USED:已使用 EXPIRED:已过期 |
 **applyEndTime** | **string**| &lt;p&gt;领取结束时间&lt;/p&gt; | [optional]
 **pageNo** | **int**| &lt;p&gt;页数&lt;/p&gt; | [optional]
 **operatedMerchantNo** | **string**| &lt;p&gt;代托管商编&lt;/p&gt; | [optional]
 **pageSize** | **int**| &lt;p&gt;页大小&lt;/p&gt; | [optional]
 **applyStartTime** | **string**| &lt;p&gt;领取开始时间&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\CouponQueryResponseDTO**](../Model/CouponQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **manageFeeQueryDeduct**
ManageFeeQueryDeductResponse manageFeeQueryDeduct(ManageFeeQueryDeductRequest request)

查询用户管理费扣费时间

查询用户管理费扣费时间

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\ManageFeeQueryDeductRequest();
$request->setRealName("realName_example");
$request->setIdCardNo("idCardNo_example");
$request->setRegisterMobile("registerMobile_example");

try {
    $response = $api_client->manageFeeQueryDeduct($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->manageFeeQueryDeduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realName** | **string**| &lt;p&gt;用户姓名&lt;/p&gt; |
 **idCardNo** | **string**| &lt;p&gt;用户身份证号&lt;/p&gt; |
 **registerMobile** | **string**| &lt;p&gt;用户注册手机号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\ManageFeeDeductQueryRespDTO**](../Model/ManageFeeDeductQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **manage_fee_query_deduct**
ManageFeeQueryDeductResponse manage_fee_query_deduct(ManageFeeQueryDeductRequest request)

查询用户管理费扣费时间

查询用户管理费扣费时间

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\ManageFeeQueryDeductRequest();
$request->setRealName("realName_example");
$request->setIdCardNo("idCardNo_example");
$request->setRegisterMobile("registerMobile_example");

try {
    $response = $api_client->manage_fee_query_deduct($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->manage_fee_query_deduct: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **realName** | **string**| &lt;p&gt;用户姓名&lt;/p&gt; |
 **idCardNo** | **string**| &lt;p&gt;用户身份证号&lt;/p&gt; |
 **registerMobile** | **string**| &lt;p&gt;用户注册手机号&lt;/p&gt; |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\ManageFeeDeductQueryRespDTO**](../Model/ManageFeeDeductQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **memberCardList**
MemberCardListResponse memberCardList(MemberCardListRequest request)

会员绑卡列表查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\MemberCardListRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");

try {
    $response = $api_client->memberCardList($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->memberCardList: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberQueryBindCardListResponseDTO**](../Model/MemberQueryBindCardListResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **memberQuery**
MemberQueryResponse memberQuery(MemberQueryRequest request)

钱包账户信息查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\MemberQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setExternalUserId("externalUserId_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->memberQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->memberQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **externalUserId** | **string**| 商户用户ID&lt;br&gt;用户在商户侧的用户ID&lt;br&gt;与会员号二选一必填 | [optional]
 **memberNo** | **string**| 会员号&lt;br&gt;与商户用户ID二选一必填 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryMemberInfoResponseDTO**](../Model/QueryMemberInfoResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **member_card_list**
MemberCardListResponse member_card_list(MemberCardListRequest request)

会员绑卡列表查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\MemberCardListRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");

try {
    $response = $api_client->member_card_list($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->member_card_list: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberQueryBindCardListResponseDTO**](../Model/MemberQueryBindCardListResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **member_query_v1_0**
MemberQueryV10Response member_query_v1_0(MemberQueryV10Request request)

钱包账户信息查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\MemberQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setExternalUserId("externalUserId_example");
$request->setMemberNo("memberNo_example");

try {
    $response = $api_client->member_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->member_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **externalUserId** | **string**| 商户用户ID&lt;br&gt;用户在商户侧的用户ID&lt;br&gt;与会员号二选一必填 | [optional]
 **memberNo** | **string**| 会员号&lt;br&gt;与商户用户ID二选一必填 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryMemberInfoResponseDTO**](../Model/QueryMemberInfoResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **passwordManage**
PasswordManageResponse passwordManage(PasswordManageRequest request)

安全设置

<p>商户调用此接口，跳转到易宝密码管理页面，此页面用于用户修改或重新设置钱包支付密码。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\PasswordManageRequest();
$request->setReturnUrl("returnUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->passwordManage($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->passwordManage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **password_manage_v1_0**
PasswordManageV10Response password_manage_v1_0(PasswordManageV10Request request)

安全设置

<p>商户调用此接口，跳转到易宝密码管理页面，此页面用于用户修改或重新设置钱包支付密码。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\PasswordManageV10Request();
$request->setReturnUrl("returnUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->password_manage_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->password_manage_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **returnUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **payment_manage_web3_v1_0**
PaymentManageWeb3V10Response payment_manage_web3_v1_0(PaymentManageWeb3V10Request request)

支付设置

商户调用此接口，跳转到支付设置页面，此页面用于用户设置支付顺序。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\PaymentManageWeb3V10Request();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->payment_manage_web3_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->payment_manage_web3_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**|  | [optional]
 **operatedMerchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletAdapterRequestURLResponseDTO**](../Model/WalletAdapterRequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeInitiate**
RechargeInitiateResponse rechargeInitiate(RechargeInitiateRequest request)

发起充值

<p>用户在商户端发起充值，商户调用此接口并打开对应url跳转到易宝充值收银台，用户在收银台选择银行卡或绑定新卡并确认支付密码后完成充值。其中：充值的银行卡必须为借记卡即储蓄卡。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeInitiateRequest();
$request->setAmount("amount_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->rechargeInitiate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->rechargeInitiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amount** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **rechargeQuery**
RechargeQueryResponse rechargeQuery(RechargeQueryRequest request)

充值查询

<p>商户通过请求该接口查询用户充值结果</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->rechargeQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->rechargeQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户请求号 |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryRechargeResponseDTO**](../Model/QueryRechargeResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recharge_initiate_v1_0**
RechargeInitiateV10Response recharge_initiate_v1_0(RechargeInitiateV10Request request)

发起充值

<p>用户在商户端发起充值，商户调用此接口并打开对应url跳转到易宝充值收银台，用户在收银台选择银行卡或绑定新卡并确认支付密码后完成充值。其中：充值的银行卡必须为借记卡即储蓄卡。</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeInitiateV10Request();
$request->setAmount("amount_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->recharge_initiate_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->recharge_initiate_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amount** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **recharge_query_v1_0**
RechargeQueryV10Response recharge_query_v1_0(RechargeQueryV10Request request)

充值查询

<p>商户通过请求该接口查询用户充值结果</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\RechargeQueryV10Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->recharge_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->recharge_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户请求号 |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryRechargeResponseDTO**](../Model/QueryRechargeResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **subscribeExpireNotify**
SubscribeExpireNotifyResponse subscribeExpireNotify(SubscribeExpireNotifyRequest request)

会员主体订阅有效期变更通知

会员对应主体的订阅有效期变更通知

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeExpireNotifyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeNotifyRequestDTO());

try {
    $response = $api_client->subscribeExpireNotify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->subscribeExpireNotify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeNotifyRequestDTO**](../Model/SubscribeNotifyRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeNotifyResponseDTO**](../Model/SubscribeNotifyResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **subscribe_expire_notify**
SubscribeExpireNotifyResponse subscribe_expire_notify(SubscribeExpireNotifyRequest request)

会员主体订阅有效期变更通知

会员对应主体的订阅有效期变更通知

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeExpireNotifyRequest();
$request->setBody(new \Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeNotifyRequestDTO());

try {
    $response = $api_client->subscribe_expire_notify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->subscribe_expire_notify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeNotifyRequestDTO**](../Model/SubscribeNotifyRequestDTO.md)|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeNotifyResponseDTO**](../Model/SubscribeNotifyResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

# **tradeAutoDeductionCreate**
TradeAutoDeductionCreateResponse tradeAutoDeductionCreate(TradeAutoDeductionCreateRequest request)

会员自动扣款下单

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TradeAutoDeductionCreateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setRequestNo("requestNo_example");
$request->setAmount("amount_example");
$request->setBindCardId("bindCardId_example");
$request->setPayWay("payWay_example");
$request->setExpireTime(new \DateTime("2013-10-20 19:20:30"));
$request->setGoodsName("goodsName_example");

try {
    $response = $api_client->tradeAutoDeductionCreate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->tradeAutoDeductionCreate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **amount** | **string**|  | [optional]
 **bindCardId** | **string**|  | [optional]
 **payWay** | **string**|  | [optional]
 **expireTime** | **\DateTime**|  | [optional]
 **goodsName** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoDeductionResponseDTO**](../Model/AutoDeductionResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeAutoDeductionQuery**
TradeAutoDeductionQueryResponse tradeAutoDeductionQuery(TradeAutoDeductionQueryRequest request)

会员自动扣款查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TradeAutoDeductionQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->tradeAutoDeductionQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->tradeAutoDeductionQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoDeductionQueryResponseDTO**](../Model/AutoDeductionQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrder**
TradeOrderResponse tradeOrder(TradeOrderRequest request)

钱包交易支付

用户与商户之间发生商品交易行为，用户可使用钱包账户余额或绑定银行卡方式支付给商户，商户调用此接口完成支付行为。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TradeOrderRequest();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setPayAmount("payAmount_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setReturnUrl("returnUrl_example");
$request->setProductName("productName_example");
$request->setRemark("remark_example");
$request->setFundProcessType("fundProcessType_example");

try {
    $response = $api_client->tradeOrder($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->tradeOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **payAmount** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **productName** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberTradOrderResp**](../Model/MemberTradOrderResp.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **tradeOrderV2**
TradeOrderV2Response tradeOrderV2(TradeOrderV2Request request)

钱包交易下单

用户与商户之间发生商品交易行为，用户可使用钱包账户余额或绑定银行卡方式支付给商户，商户调用此接口完成支付行为。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TradeOrderV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount(1.2);
$request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("fundProcessType_example");
$request->setMemberNo("memberNo_example");
$request->setPayerIp("payerIp_example");
$request->setPayAgreement("payAgreement_example");
$request->setCsUrl("csUrl_example");

try {
    $response = $api_client->tradeOrderV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->tradeOrderV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **\DateTime**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]
 **payerIp** | **string**|  | [optional]
 **payAgreement** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\APIWalletPayResponseDTO**](../Model/APIWalletPayResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **trade_order_v1_0**
TradeOrderV10Response trade_order_v1_0(TradeOrderV10Request request)

钱包交易支付

用户与商户之间发生商品交易行为，用户可使用钱包账户余额或绑定银行卡方式支付给商户，商户调用此接口完成支付行为。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TradeOrderV10Request();
$request->setRequestNo("requestNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setPayAmount("payAmount_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setReturnUrl("returnUrl_example");
$request->setProductName("productName_example");
$request->setRemark("remark_example");
$request->setFundProcessType("fundProcessType_example");

try {
    $response = $api_client->trade_order_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->trade_order_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **payAmount** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **productName** | **string**|  | [optional]
 **remark** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberTradOrderResp**](../Model/MemberTradOrderResp.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **trade_order_v2_0**
TradeOrderV20Response trade_order_v2_0(TradeOrderV20Request request)

钱包交易下单

用户与商户之间发生商品交易行为，用户可使用钱包账户余额或绑定银行卡方式支付给商户，商户调用此接口完成支付行为。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TradeOrderV20Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOrderId("orderId_example");
$request->setOrderAmount(1.2);
$request->setExpiredTime(new \DateTime("2013-10-20 19:20:30"));
$request->setNotifyUrl("notifyUrl_example");
$request->setMemo("memo_example");
$request->setGoodsName("goodsName_example");
$request->setFundProcessType("fundProcessType_example");
$request->setMemberNo("memberNo_example");
$request->setPayerIp("payerIp_example");
$request->setPayAgreement("payAgreement_example");
$request->setCsUrl("csUrl_example");

try {
    $response = $api_client->trade_order_v2_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->trade_order_v2_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **orderId** | **string**|  | [optional]
 **orderAmount** | **float**|  | [optional]
 **expiredTime** | **\DateTime**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **memo** | **string**|  | [optional]
 **goodsName** | **string**|  | [optional]
 **fundProcessType** | **string**|  | [optional]
 **memberNo** | **string**|  | [optional]
 **payerIp** | **string**|  | [optional]
 **payAgreement** | **string**|  | [optional]
 **csUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\APIWalletPayResponseDTO**](../Model/APIWalletPayResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2cInitiate**
TransferB2cInitiateResponse transferB2cInitiate(TransferB2cInitiateRequest request)

发起B2C转账

商户与用户之间发生的交易行为，商户可向用户的钱包账户转账，商户调用此接口完成转账行为

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cInitiateRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setFromMerchantNo("fromMerchantNo_example");
$request->setToMerchantNo("toMerchantNo_example");
$request->setToMerchantUserNo("toMerchantUserNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderAmount("orderAmount_example");
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->transferB2cInitiate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->transferB2cInitiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **toMerchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletTransferB2CResponseDTO**](../Model/WalletTransferB2CResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2cMarket**
TransferB2cMarketResponse transferB2cMarket(TransferB2cMarketRequest request)

营销红包转账

商户与用户之间发生的交易行为，商户可向用户的钱包账户转账，商户调用此接口完成转账行为

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cMarketRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setFromMerchantNo("fromMerchantNo_example");
$request->setToMerchantNo("toMerchantNo_example");
$request->setToMerchantUserNo("toMerchantUserNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderAmount("orderAmount_example");
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRemark("remark_example");

try {
    $response = $api_client->transferB2cMarket($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->transferB2cMarket: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **toMerchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletTransferB2CResponseDTO**](../Model/WalletTransferB2CResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transferB2cQuery**
TransferB2cQueryResponse transferB2cQuery(TransferB2cQueryRequest request)

B2C转账查询

商户通过请求该接口查询商户向用户转账的订单结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cQueryRequest();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setFromMerchantNo("fromMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setBusinessNo("businessNo_example");

try {
    $response = $api_client->transferB2cQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->transferB2cQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **fromMerchantNo** | **string**| 交易主体商编(转出方商编） |
 **requestNo** | **string**| 商户请求号，与易宝订单号不能同时为空 | [optional]
 **businessNo** | **string**| 易宝订单号&lt;br&gt;转账发起完成后，易宝返回的唯一订单号 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryMGB2CResponseDTO**](../Model/QueryMGB2CResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_b2c_initiate_v1_0**
TransferB2cInitiateV10Response transfer_b2c_initiate_v1_0(TransferB2cInitiateV10Request request)

发起B2C转账

商户与用户之间发生的交易行为，商户可向用户的钱包账户转账，商户调用此接口完成转账行为

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cInitiateV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setFromMerchantNo("fromMerchantNo_example");
$request->setToMerchantNo("toMerchantNo_example");
$request->setToMerchantUserNo("toMerchantUserNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderAmount("orderAmount_example");
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");

try {
    $response = $api_client->transfer_b2c_initiate_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->transfer_b2c_initiate_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **toMerchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletTransferB2CResponseDTO**](../Model/WalletTransferB2CResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_b2c_market_v1_0**
TransferB2cMarketV10Response transfer_b2c_market_v1_0(TransferB2cMarketV10Request request)

营销红包转账

商户与用户之间发生的交易行为，商户可向用户的钱包账户转账，商户调用此接口完成转账行为

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cMarketV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setFromMerchantNo("fromMerchantNo_example");
$request->setToMerchantNo("toMerchantNo_example");
$request->setToMerchantUserNo("toMerchantUserNo_example");
$request->setRequestNo("requestNo_example");
$request->setOrderAmount("orderAmount_example");
$request->setFeeChargeSide("feeChargeSide_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRemark("remark_example");

try {
    $response = $api_client->transfer_b2c_market_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->transfer_b2c_market_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **fromMerchantNo** | **string**|  | [optional]
 **toMerchantNo** | **string**|  | [optional]
 **toMerchantUserNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **orderAmount** | **string**|  | [optional]
 **feeChargeSide** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **remark** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletTransferB2CResponseDTO**](../Model/WalletTransferB2CResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **transfer_b2c_query_v1_0**
TransferB2cQueryV10Response transfer_b2c_query_v1_0(TransferB2cQueryV10Request request)

B2C转账查询

商户通过请求该接口查询商户向用户转账的订单结果

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\TransferB2cQueryV10Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setFromMerchantNo("fromMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setBusinessNo("businessNo_example");

try {
    $response = $api_client->transfer_b2c_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->transfer_b2c_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |
 **fromMerchantNo** | **string**| 交易主体商编(转出方商编） |
 **requestNo** | **string**| 商户请求号，与易宝订单号不能同时为空 | [optional]
 **businessNo** | **string**| 易宝订单号&lt;br&gt;转账发起完成后，易宝返回的唯一订单号 | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryMGB2CResponseDTO**](../Model/QueryMGB2CResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **walletCancel**
WalletCancelResponse walletCancel(WalletCancelRequest request)

注销会员钱包

商户注销会员钱包功能

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WalletCancelRequest();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->walletCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->walletCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberCancelResponseDTO**](../Model/MemberCancelResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **walletIndexV2**
WalletIndexV2Response walletIndexV2(WalletIndexV2Request request)

钱包注册/登录接口

通过该接口获取钱包注册/登陆页面

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WalletIndexV2Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setUserMerchantNo("userMerchantNo_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setMobile("mobile_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->walletIndexV2($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->walletIndexV2: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **userMerchantNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wallet_cancel_v1_0**
WalletCancelV10Response wallet_cancel_v1_0(WalletCancelV10Request request)

注销会员钱包

商户注销会员钱包功能

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WalletCancelV10Request();
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->wallet_cancel_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->wallet_cancel_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberCancelResponseDTO**](../Model/MemberCancelResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **wallet_index_v2_0**
WalletIndexV20Response wallet_index_v2_0(WalletIndexV20Request request)

钱包注册/登录接口

通过该接口获取钱包注册/登陆页面

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WalletIndexV20Request();
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setUserMerchantNo("userMerchantNo_example");
$request->setName("name_example");
$request->setCertificateType("certificateType_example");
$request->setCertificateNo("certificateNo_example");
$request->setMobile("mobile_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");

try {
    $response = $api_client->wallet_index_v2_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->wallet_index_v2_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **parentMerchantNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **userMerchantNo** | **string**|  | [optional]
 **name** | **string**|  | [optional]
 **certificateType** | **string**|  | [optional]
 **certificateNo** | **string**|  | [optional]
 **mobile** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **web3AgreementNotify**
Web3AgreementNotifyResponse web3AgreementNotify(Web3AgreementNotifyRequest request)

协议通知商户

协议通知商户

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\Web3AgreementNotifyRequest();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOperateTime("operateTime_example");
$request->setOperateType("operateType_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setEndTime("endTime_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->web3AgreementNotify($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->web3AgreementNotify: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**|  | [optional]
 **operateTime** | **string**|  | [optional]
 **operateType** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **endTime** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretNotifyRespDTO**](../Model/FreeSecretNotifyRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **web3AgreementPaymentCancel**
Web3AgreementPaymentCancelResponse web3AgreementPaymentCancel(Web3AgreementPaymentCancelRequest request)

web3发起免密支付解约

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\Web3AgreementPaymentCancelRequest();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOperateReason("operateReason_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->web3AgreementPaymentCancel($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->web3AgreementPaymentCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**|  | [optional]
 **operateReason** | **string**|  | [optional]
 **operatedMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretCancelRespDTO**](../Model/FreeSecretCancelRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **web3AgreementPaymentQuery**
Web3AgreementPaymentQueryResponse web3AgreementPaymentQuery(Web3AgreementPaymentQueryRequest request)

web3钱包免密支付协议查询接口

钱包免密支付协议查询接口

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\Web3AgreementPaymentQueryRequest();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");

try {
    $response = $api_client->web3AgreementPaymentQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->web3AgreementPaymentQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**| &lt;p&gt;商户用户id&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号&amp;nbsp;易宝支付分配的的商户唯一标识&lt;/p&gt; |
 **operatedMerchantNo** | **string**| &lt;p&gt;代托管商编&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretQueryRespDTO**](../Model/FreeSecretQueryRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **web3AgreementPaymentSign**
Web3AgreementPaymentSignResponse web3AgreementPaymentSign(Web3AgreementPaymentSignRequest request)

web3发起免密支付签约

用户在商户端发起协议签约，商户调用此接口并打开对应url跳转到易宝验密签约页面，用户输入支付密码后验证并签约。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\Web3AgreementPaymentSignRequest();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setReturnUrl("returnUrl_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->web3AgreementPaymentSign($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->web3AgreementPaymentSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**|  | [optional]
 **operatedMerchantNo** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretSignRespDTO**](../Model/FreeSecretSignRespDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **web3CouponListQuery**
Web3CouponListQueryResponse web3CouponListQuery(Web3CouponListQueryRequest request)

优惠券列表查询

适配WEB3优惠券列表查询

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\Web3CouponListQueryRequest();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setQueryType("queryType_example");
$request->setApplyEndTime("applyEndTime_example");
$request->setPageNo(56);
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setPageSize(56);
$request->setApplyStartTime("applyStartTime_example");

try {
    $response = $api_client->web3CouponListQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->web3CouponListQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**| &lt;p&gt;外部用户标识&lt;/p&gt; |
 **parentMerchantNo** | **string**| &lt;p&gt;业务发起方商编（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号）&lt;/p&gt; |
 **merchantNo** | **string**| &lt;p&gt;商户编号 易宝支付分配的的商户唯一标识&lt;/p&gt; |
 **queryType** | **string**| &lt;p&gt;查询类型&lt;/p&gt; 可选项如下: NOT_USE:未使用 USED:已使用 EXPIRED:已过期 |
 **applyEndTime** | **string**| &lt;p&gt;领取结束时间&lt;/p&gt; | [optional]
 **pageNo** | **int**| &lt;p&gt;页数&lt;/p&gt; | [optional]
 **operatedMerchantNo** | **string**| &lt;p&gt;代托管商编&lt;/p&gt; | [optional]
 **pageSize** | **int**| &lt;p&gt;页大小&lt;/p&gt; | [optional]
 **applyStartTime** | **string**| &lt;p&gt;领取开始时间&lt;/p&gt; | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\CouponQueryResponseDTO**](../Model/CouponQueryResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **web3PaymentManage**
Web3PaymentManageResponse web3PaymentManage(Web3PaymentManageRequest request)

支付设置

商户调用此接口，跳转到支付设置页面，此页面用于用户设置支付顺序。

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\Web3PaymentManageRequest();
$request->setMerchantUserNo("merchantUserNo_example");
$request->setOperatedMerchantNo("operatedMerchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");

try {
    $response = $api_client->web3PaymentManage($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->web3PaymentManage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **merchantUserNo** | **string**|  | [optional]
 **operatedMerchantNo** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletAdapterRequestURLResponseDTO**](../Model/WalletAdapterRequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawInitiate**
WithdrawInitiateResponse withdrawInitiate(WithdrawInitiateRequest request)

发起提现

用户在商户端发起提现，商户调用此接口并打开对应url跳转到易宝提现收银台，用户在收银台选择银行卡或绑定新卡并确认支付密码后完成提现。其中：提现的银行卡必须为借记卡即储蓄卡。 提现到账类型说明（商户据此引导用户）： 1）实时到账，用户提交提现申请成功后，资金于（一小时以内）到账。 2）2小时到账，用户提交提现申请成功后，资金将于两小时后到账。 3）次日到账，用户提交提现申请成功后，资金将于次日7：00以后到账（例：周六发起周日7：00以后到账）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawInitiateRequest();
$request->setAmount("amount_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setFeeInnerType("feeInnerType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setWithdrawType("0");

try {
    $response = $api_client->withdrawInitiate($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->withdrawInitiate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amount** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **feeInnerType** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **withdrawType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdrawQuery**
WithdrawQueryResponse withdrawQuery(WithdrawQueryRequest request)

提现查询

<p>商户通过请求该接口查询用户提现信息</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawQueryRequest();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->withdrawQuery($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->withdrawQuery: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户请求号 |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletQueryWithdrawResultDTO**](../Model/WalletQueryWithdrawResultDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdraw_initiate_v1_0**
WithdrawInitiateV10Response withdraw_initiate_v1_0(WithdrawInitiateV10Request request)

发起提现

用户在商户端发起提现，商户调用此接口并打开对应url跳转到易宝提现收银台，用户在收银台选择银行卡或绑定新卡并确认支付密码后完成提现。其中：提现的银行卡必须为借记卡即储蓄卡。 提现到账类型说明（商户据此引导用户）： 1）实时到账，用户提交提现申请成功后，资金于（一小时以内）到账。 2）2小时到账，用户提交提现申请成功后，资金将于两小时后到账。 3）次日到账，用户提交提现申请成功后，资金将于次日7：00以后到账（例：周六发起周日7：00以后到账）

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawInitiateV10Request();
$request->setAmount("amount_example");
$request->setReturnUrl("returnUrl_example");
$request->setNotifyUrl("notifyUrl_example");
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setMerchantUserNo("merchantUserNo_example");
$request->setFeeInnerType("feeInnerType_example");
$request->setParentMerchantNo("parentMerchantNo_example");
$request->setWithdrawType("0");

try {
    $response = $api_client->withdraw_initiate_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->withdraw_initiate_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **amount** | **string**|  | [optional]
 **returnUrl** | **string**|  | [optional]
 **notifyUrl** | **string**|  | [optional]
 **requestNo** | **string**|  | [optional]
 **merchantNo** | **string**|  | [optional]
 **merchantUserNo** | **string**|  | [optional]
 **feeInnerType** | **string**|  | [optional]
 **parentMerchantNo** | **string**|  | [optional]
 **withdrawType** | **string**|  | [optional]

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO**](../Model/RequestURLResponseDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

# **withdraw_query_v1_0**
WithdrawQueryV10Response withdraw_query_v1_0(WithdrawQueryV10Request request)

提现查询

<p>商户通过请求该接口查询用户提现信息</p>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_client = Yeepay\Yop\Sdk\Service\MWallet\MWalletClientBuilder::builder()->build();
$request = new Yeepay\Yop\Sdk\Service\MWallet\Model\WithdrawQueryV10Request();
$request->setRequestNo("requestNo_example");
$request->setMerchantNo("merchantNo_example");
$request->setParentMerchantNo("parentMerchantNo_example");

try {
    $response = $api_client->withdraw_query_v1_0($request);
    print_r($response->getResult());
}catch (\Exception $e) {
    echo 'Exception when calling MWalletClient->withdraw_query_v1_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **requestNo** | **string**| 商户请求号 |
 **merchantNo** | **string**| 商户编号&lt;br&gt;易宝支付分配的的商户唯一标识 |
 **parentMerchantNo** | **string**| 发起方商编&lt;br&gt;发起方商户编号（标准商户收付款方案中此参数与商编一致，平台商户收付款方案中此参数为平台商商户编号） |

### Return type
[**\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletQueryWithdrawResultDTO**](../Model/WalletQueryWithdrawResultDTO.md)
### Authorization

YOP-SM2-SM3


### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

