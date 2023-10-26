<?php


namespace Yeepay\Yop\Sdk\Service\Account;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Account\Model as Model;

class AccountClientTest extends TestCase
{


    private static $client;

    public static function setUpBeforeClass()
    {
        $data = \GuzzleHttp\json_decode('{"app_key":"app_Fe51qCyZWcEnDMtK","aes_secret_key":"ytrbMFjRqLpLgY58J6LN9Q==","server_root":"http://ycetest.yeepay.com:30228/yop-center","yos_server_root":"http://ycetest.yeepay.com:30228/yop-center","yop_public_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEA4g7dPL+CBeuzFmARI2GFjZpKODUROaMG+E6wdNfv5lhPqC3jjTIeljWU8AiruZLGRhl92QWcTjb3XonjaV6k9rf9adQtyv2FLS7bl2Vz2WgjJ0FJ5/qMaoXaT+oAgWFk2GypyvoIZsscsGpUStm6BxpWZpbPrGJR0N95un/130cQI9VCmfvgkkCaXt7TU1BbiYzkc8MDpLScGm/GUCB2wB5PclvOxvf5BR/zNVYywTEFmw2Jo0hIPPSWB5Yyf2mx950Fx8da56co/FxLdMwkDOO51Qg3fbaExQDVzTm8Odi++wVJEP1y34tlmpwFUVbAKIEbyyELmi/2S6GG0j9vNwIDAQAB"}],"isv_private_key":[{"store_type":"string","cert_type":"RSA2048","value":"MIIEvAIBADANBgkqhkiG9w0BAQEFAASCBKYwggSiAgEAAoIBAQCf0qRvP2OJQEONEHiO5Jh2tbGo6pA3Wh7cINgpKZHLHIygZHhB4sU/2JxHqbraRsuBzC2aeWCTrXJVKjQS91vn0JHJd4BonK4ryqTRWULQkPqvzFNz59qna5laWE/m1LriyMfSVsyTHGggqbCKtNorCW+DVnWtCJybo4HKeSqyHFw13EetSRkmVF+Y8TvDTkKZJuNlK5HXSithkSY9d4PZUyIkaF1HnogQPf+mmvPwSJuVvFxeupnG99wljP5Yv2FfD9xq+XoR5mSlTCFePWjKvocSmiaVcWwSk0jW6ks0XdlMLhHq6NeqLzX8Ze0wpzqcAEurZpOrmaQNFd2m+RXNAgMBAAECggEAdafmMZeiuQm8MP7tIZSbwNhlX4q+fGE10qvDNhpKIBJ2XCVaenZs62GVOxRyX/o6GuWqtMuiE1Vek9+r0kKTQAbFLGFzAJBHkClwSEXD8DKqufxbezo2N4X4sQ/OUopMwmM451nK5InHBjSlqJcW/RPHKhLeMnHiiJlIFTw5+D/DcnCBfJ7sLJw3/EM2WR5wbLguI+ExCkN1PovSBkGhvTLzJtBhMveBdM7/ajg5/edvIvU0spBmakPCCnVuek1asO95AYyo02psZ3//MMD3/li9wzZqeIGsFbALIOS/vLPh1qBozJIHYTPmO+mXx8VVYBK5QtCw6HwotD6J94VBQQKBgQD8MnsaHBUn28dTsg/aeSeQSjlX93czeu/nmlXCS1J6ctjBDPCL8wrPsVkjYsgH+uJTbAW3Cwuoov50A3BDZEWA+C3plZoXDIOlFEgA1dWPsrZONe27PjYNvlKphVBXb2mfPxoAcOtBBQBIfsBQIXGTB0pVkMDpVqnbOpEM7cGVGQKBgQCiO5UdaMoHHM9ZTicZdsg/6ZPS6ZtBS+7JRSQaosb66P6rib5YyfoYOBfUeswjrB/y5CXtkN4xd/gyAm1AVN5I4NPS7XQhvphfg+BBAJ7mixNwT7hkQek8pi20+TOlgbd1PmG4qvOEhgeMa9neuJCmGSw3rgfcu96+1YP3GOFI1QKBgDNUpv+idZ/eOMzNMjLac/YHVXKVGLruq8OtAwV/xTLNC1cHpjIl7q5lP2pXYbVWGBi4pNUjt2TEgBvm00O0Nf1RBi9D1tAYKPdBkIIzA7uyuS5kBZYVzHSxpyt/yeFx+MKD2mv6j7d1KCCZQ9VLaU1ur2+I/erAS+QmIH3MKpmJAoGAP15kpYMr/tE7ENgdH64tFAHp0uWa1kuRrx6JtrnEXXerGlgIeOgT/2fRrxZ0LK7sH9UMF5qRn+MLmIUoJYvA89iWBPrpdNDc9douO1XBu62xXxpUnRy9vQnwKpN4n/pmLa67PwXPbwFna2spQ/z1y1tj0S/yND9SB1qhXGBkhy0CgYBhJf0SZ9PWaasOxAsDgFsj3mSjfvoTqclRDKo1d0KFyOIKOkK3hS8ZaHA/dcR024ydc6b0mU+pyrm2/k+JuX4dHO1M9wshS1YAXytj5RCs+43ghJrbDeNxrNK4VesJPpyK0kEGHSLbMgHnSVZ4/jAgdoKEhz1cHbZorQ92XgDzBw=="}],"encrypt_key":"AWXI5fZGXmTFVHfjyzBMMrrk1IF9dCqGJt3JIZrKY90=","http_client":{"connect_timeout":10000,"read_timeout":30000,"max_conn_total":2000,"max_conn_per_route":1000}}', true);
        try {
            $appSdkConfig = new AppSdkConfig($data);
        } catch (YopClientException $e) {
            throw $e;
        }
        self::$client = AccountClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function accountBookQueryRefundTest()
    {
        $request = new Model\AccountBookQueryRefundRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");
        try{
            $response = self::$client->accountBookQueryRefund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountBookQueryRefund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountBookRefundTest()
    {
        $request = new Model\AccountBookRefundRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantRefundRequestNo("merchantRefundRequestNo_example");
        $request->setOriginalOrderNo("originalOrderNo_example");
        $request->setRefundAmount(1.2);
        $request->setBankPostscrip("bankPostscrip_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->accountBookRefund($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountBookRefund: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountManageAccountOpenTest()
    {
        $request = new Model\AccountManageAccountOpenRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setMerchantAccountBookName("merchantAccountBookName_example");
        try{
            $response = self::$client->accountManageAccountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageAccountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountManageAccountQueryTest()
    {
        $request = new Model\AccountManageAccountQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantAccountBookNo("merchantAccountBookNo_example");
        $request->setYpAccountBookNo("ypAccountBookNo_example");
        try{
            $response = self::$client->accountManageAccountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageAccountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountManageBankAccountOpenTest()
    {
        $request = new Model\AccountManageBankAccountOpenRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountRequestDTO());
        try{
            $response = self::$client->accountManageBankAccountOpen($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageBankAccountOpen: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountManageBankAccountQueryTest()
    {
        $request = new Model\AccountManageBankAccountQueryRequest();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->accountManageBankAccountQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountManageBankAccountQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function account_individual_applyTest()
    {
        $request = new Model\AccountIndividualApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setPhone("phone_example");
        $request->setFrontUrl("frontUrl_example");
        $request->setContraryUrl("contraryUrl_example");
        try{
            $response = self::$client->account_individual_apply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_individual_apply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function account_individual_queryTest()
    {
        $request = new Model\AccountIndividualQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->account_individual_query($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_individual_query: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function account_individual_query_progressTest()
    {
        $request = new Model\AccountIndividualQueryProgressRequest();

        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->account_individual_query_progress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_individual_query_progress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function account_manage_bank_account_query_v1_0Test()
    {
        $request = new Model\AccountManageBankAccountQueryV10Request();

        $request->setRequestNo("requestNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->account_manage_bank_account_query_v1_0($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->account_manage_bank_account_query_v1_0: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function accountinfosQueryTest()
    {
        $request = new Model\AccountinfosQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->accountinfosQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->accountinfosQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function autoWithdrawRuleCancelTest()
    {
        $request = new Model\AutoWithdrawRuleCancelRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setRuleId("ruleId_example");
        try{
            $response = self::$client->autoWithdrawRuleCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->autoWithdrawRuleCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function autoWithdrawRuleQueryTest()
    {
        $request = new Model\AutoWithdrawRuleQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->autoWithdrawRuleQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->autoWithdrawRuleQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function autoWithdrawRuleSetTest()
    {
        $request = new Model\AutoWithdrawRuleSetRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setBindId("bindId_example");
        $request->setBankAccountNo("bankAccountNo_example");
        $request->setReceiveType("receiveType_example");
        $request->setTriggerTime("triggerTime_example");
        $request->setRemainAmount(1.2);
        $request->setRemark("remark_example");
        $request->setNotifyAddress("notifyAddress_example");
        try{
            $response = self::$client->autoWithdrawRuleSet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->autoWithdrawRuleSet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function balanceQueryTest()
    {
        $request = new Model\BalanceQueryRequest();

        $request->setMerchantNo("10080006026");
        try{
            $response = self::$client->balanceQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->balanceQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountAuthApplyTest()
    {
        $request = new Model\BankAccountAuthApplyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountAuthApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountAuthApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankAccountAuthConfirmTest()
    {
        $request = new Model\BankAccountAuthConfirmRequest();

        $request->setAuthCode("authCode_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bankAccountAuthConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankAccountAuthConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankPaymentOrderTest()
    {
        $request = new Model\BankPaymentOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\BankPaymentOrderBankAccountPaymentRequestDtoParam());
        try{
            $response = self::$client->bankPaymentOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bankPaymentOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bank_account_auth_applyTest()
    {
        $request = new Model\BankAccountAuthApplyRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_auth_apply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_auth_apply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bank_account_auth_confirmTest()
    {
        $request = new Model\BankAccountAuthConfirmRequest();

        $request->setAuthCode("authCode_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->bank_account_auth_confirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->bank_account_auth_confirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseAccountBookPayOrderTest()
    {
        $request = new Model\EnterpriseAccountBookPayOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountBookPayOrderAccountBookPaymentRequestDtoParam());
        try{
            $response = self::$client->enterpriseAccountBookPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAccountBookPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseAccountPayOrderTest()
    {
        $request = new Model\EnterpriseAccountPayOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAccountPayOrderAccountPaymentRequestDtoParam());
        try{
            $response = self::$client->enterpriseAccountPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAccountPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseAutoPaymentOrderTest()
    {
        $request = new Model\EnterpriseAutoPaymentOrderRequest();

        $request->setMerchantNo("10014242006");
        $request->setOrderId("merchant12345");
        $request->setOrderAmount(0.01);
        $request->setFundProcessType("fundProcessType_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setExpiredTime("2021-05-12 13:23:45");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setPayerNotifyUrl("payerNotifyUrl_example");
        $request->setCsUrl("csUrl_example");
        try{
            $response = self::$client->enterpriseAutoPaymentOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAutoPaymentOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseAutoPaymentQueryTest()
    {
        $request = new Model\EnterpriseAutoPaymentQueryRequest();

        $request->setMerchantNo("10014242004");
        $request->setOrderId("merchant12345");
        $request->setOrderDate("orderDate_example");
        $request->setUniqueOrderNo("uniqueOrderNo_example");
        try{
            $response = self::$client->enterpriseAutoPaymentQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseAutoPaymentQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseTokenPayOrderTest()
    {
        $request = new Model\EnterpriseTokenPayOrderRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setToken("token_example");
        $request->setPayerMerchantNo("payerMerchantNo_example");
        try{
            $response = self::$client->enterpriseTokenPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseTokenPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function enterpriseWithholdingOrderTest()
    {
        $request = new Model\EnterpriseWithholdingOrderRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10014242004");
        $request->setPayerMerchantNo("10014242005");
        $request->setOrderId("merchant12345");
        $request->setOrderAmount(88.88);
        $request->setFundProcessType("fundProcessType_example");
        $request->setGoodsName("旺仔牛奶");
        $request->setExpiredTime("2017-12-12 13:23:45");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("费用");
        $request->setPayerNotifyUrl("payerNotifyUrl_example");
        $request->setCsUrl("csUrl_example");
        try{
            $response = self::$client->enterpriseWithholdingOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->enterpriseWithholdingOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function externalOrderTest()
    {
        $request = new Model\ExternalOrderRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setChannelName("channelName_example");
        $request->setOrderId("orderId_example");
        $request->setMerchantName("merchantName_example");
        $request->setGoodsName("goodsName_example");
        $request->setTrxDate("trxDate_example");
        $request->setFinishDate("finishDate_example");
        $request->setOrderAmount(1.2);
        $request->setRealAmount(1.2);
        $request->setPayerUserId("payerUserId_example");
        $request->setPayWay("payWay_example");
        $request->setPayCardNo("payCardNo_example");
        $request->setPayCardType("payCardType_example");
        $request->setUserRequestIp("userRequestIp_example");
        $request->setTrxType("trxType_example");
        $request->setBatchNo("batchNo_example");
        $request->setChannelExtInfo("{   \"channelMerchantInfos\": [     {       \"channelMrchantName\": \"商户名称\",       \"channelMrchantNo\": \"10020320020\"     },     {       \"channelMrchantName\": \"商户名称2\",       \"channelMrchantNo\": \"10020320021\"     }   ] }");
        try{
            $response = self::$client->externalOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->externalOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function individualApplyTest()
    {
        $request = new Model\IndividualApplyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setName("name_example");
        $request->setCertificateType("certificateType_example");
        $request->setCertificateNo("certificateNo_example");
        $request->setPhone("phone_example");
        $request->setFrontUrl("frontUrl_example");
        $request->setContraryUrl("contraryUrl_example");
        try{
            $response = self::$client->individualApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->individualApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function individualQueryTest()
    {
        $request = new Model\IndividualQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->individualQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->individualQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function individualQueryProgressTest()
    {
        $request = new Model\IndividualQueryProgressRequest();

        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->individualQueryProgress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->individualQueryProgress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payBatchOrderTest()
    {
        $request = new Model\PayBatchOrderRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\PayBatchOrderBatchRemitReqDTOParam());
        try{
            $response = self::$client->payBatchOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payBatchOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payBatchQueryTest()
    {
        $request = new Model\PayBatchQueryRequest();

        $request->setBatchNo("batchNo_example");
        try{
            $response = self::$client->payBatchQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payBatchQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payCancelTest()
    {
        $request = new Model\PayCancelRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setOrderNo("20200720110033a171b64e");
        $request->setCancelReason("业务需要撤销此次付款");
        try{
            $response = self::$client->payCancel($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payCancel: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payOrderTest()
    {
        $request = new Model\PayOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("PAY2133213124");
        $request->setOrderAmount(1.01);
        $request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持收款方承担；当平台商或服务商承担时无需指定此手续费承担方；");
        $request->setReceiveType("REAL_TIME");
        $request->setReceiverAccountNo("6212260200062388891");
        $request->setReceiverAccountName("receiverAccountName_example");
        $request->setReceiverBankCode("ICBC");
        $request->setBankAccountType("DEBIT_CARD");
        $request->setBranchBankCode("branchBankCode_example");
        $request->setComments("xx平台付款");
        $request->setTerminalType("PC");
        $request->setNotifyUrl("http://www.baidu.com");
        $request->setRemark("remark_example");
        $request->setReceiptComments("receiptComments_example");
        $request->setRiskInfo("riskInfo_example");
        try{
            $response = self::$client->payOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function payQueryTest()
    {
        $request = new Model\PayQueryRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("REMIT20200327103027");
        $request->setOrderNo("8af60c56b35b42d3a7e985fe55a6c54c");
        try{
            $response = self::$client->payQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->payQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function paySystemQueryTest()
    {
        $request = new Model\PaySystemQueryRequest();

        $request->setMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
        $request->setRequestNo("REMIT20200327103027");
        $request->setOrderNo("8af60c56b35b42d3a7e985fe55a6c54c");
        try{
            $response = self::$client->paySystemQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->paySystemQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function receiptGatherTest()
    {
        $request = new Model\ReceiptGatherRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRemark("remark_example");
        $request->setCounterpartyNo("counterpartyNo_example");
        $request->setOrderNos("orderNos_example");
        $request->setBizDate("bizDate_example");
        try{
            $response = self::$client->receiptGather($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->receiptGather: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function receiptGetTest()
    {
        $request = new Model\ReceiptGetRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setTradeType("tradeType_example");
        $request->setOrderNo("示例值：8af60c56b35b42d3a7e985fe55a6c54c");
        $request->setRequestNo("示例值：REMIT20200327103027");
        $request->setOrderDate("orderDate_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->receiptGet($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->receiptGet: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeTest()
    {
        $request = new Model\RechargeRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\RechargeRechargeApiV2RequestDTOParam());
        try{
            $response = self::$client->recharge($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->recharge: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeAccountBookQueryTest()
    {
        $request = new Model\RechargeAccountBookQueryRequest();

        $request->setYpAccountBookNo("ypAccountBookNo_example");
        $request->setQueryStartDate("2022-01-01 00:00:00");
        $request->setQueryEndDate("2022-01-02 23:59:59");
        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setPageNo(56);
        $request->setPageSize(56);
        try{
            $response = self::$client->rechargeAccountBookQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeAccountBookQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeBatchQueryTest()
    {
        $request = new Model\RechargeBatchQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setQueryStartDate("queryStartDate_example");
        $request->setQueryEndDate("queryEndDate_example");
        try{
            $response = self::$client->rechargeBatchQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeBatchQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeOnlinebankOrderTest()
    {
        $request = new Model\RechargeOnlinebankOrderRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setAmount(1.2);
        $request->setPayType("payType_example");
        $request->setBankCode("bankCode_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setRemark("remark_example");
        $request->setReturnUrl("returnUrl_example");
        try{
            $response = self::$client->rechargeOnlinebankOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeOnlinebankOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeOrderTest()
    {
        $request = new Model\RechargeOrderRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo_example");
        $request->setAmount(1.2);
        $request->setRemark("remark_example");
        $request->setPayType("payType_example");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->rechargeOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rechargeQueryTest()
    {
        $request = new Model\RechargeQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderNo("orderNo_example");
        $request->setRequestNo("requestNo_example");
        try{
            $response = self::$client->rechargeQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->rechargeQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function setWithdrawRuleTest()
    {
        $request = new Model\SetWithdrawRuleRequest();

        $request->setFromMerchantNo("fromMerchantNo_example");
        $request->setTomerchantNo("tomerchantNo_example");
        try{
            $response = self::$client->setWithdrawRule($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->setWithdrawRule: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function supplierApplyTest()
    {
        $request = new Model\SupplierApplyRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyApplySupplierRequestDTOParam());
        try{
            $response = self::$client->supplierApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function supplierPayOrderTest()
    {
        $request = new Model\SupplierPayOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setMerchantNo("100400612345");
        $request->setRequestNo("requestNo111");
        $request->setOrderAmount(1.01);
        $request->setReceiverAccountNo("6212260200062388891");
        $request->setSupplierId(17);
        $request->setReceiverBankCode("ICBC");
        $request->setBankAccountType("DEBIT_CARD");
        $request->setComments("xx平台付款");
        $request->setFeeChargeSide("PAYER");
        $request->setTerminalType("PC");
        $request->setReceiveType("REAL_TIME");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->supplierPayOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierPayOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function supplierQueryTest()
    {
        $request = new Model\SupplierQueryRequest();

        $request->setMerchantNo("10080011111");
        try{
            $response = self::$client->supplierQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function supplierQueryProgressTest()
    {
        $request = new Model\SupplierQueryProgressRequest();

        $request->setRequestNo("requestNo1111");
        try{
            $response = self::$client->supplierQueryProgress($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->supplierQueryProgress: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferB2bOrderTest()
    {
        $request = new Model\TransferB2bOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("商户请求号，由商户自定义生成;示例值：TRANS2133213124");
        $request->setFromMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
        $request->setToMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612346");
        $request->setToAccountType("默认FUND_ACCOUNT");
        $request->setOrderAmount("单位：元（RMB），精确到分;示例值：0.01 元");
        $request->setUsage("usage_example");
        $request->setFeeChargeSide("当商户承担且计费方式为预付实扣或后收时，不支持转入方承担；当平台商或服务商承担时无需指定此手续费承担方；");
        $request->setNotifyUrl("notifyUrl_example");
        try{
            $response = self::$client->transferB2bOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferB2bQueryTest()
    {
        $request = new Model\TransferB2bQueryRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("商户请求号，由商户自定义生成 ;示例值：TRANS2133213124");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transferB2bQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferB2bQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferSystemQueryTest()
    {
        $request = new Model\TransferSystemQueryRequest();

        $request->setMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
        $request->setRequestNo("商户请求号，由商户自定义生成 ;示例值：TRANS2133213124");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transferSystemQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferSystemQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferWechatOrderTest()
    {
        $request = new Model\TransferWechatOrderRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setAmount(1.2);
        $request->setAppId("appId_example");
        $request->setScene("scene_example");
        $request->setOpenId("openId_example");
        $request->setUserName("userName_example");
        $request->setRemark("remark_example");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->transferWechatOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferWechatOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function transferWechatQueryTest()
    {
        $request = new Model\TransferWechatQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setRequestNo("requestNo_example");
        $request->setOrderNo("orderNo_example");
        try{
            $response = self::$client->transferWechatQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->transferWechatQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawCardBindTest()
    {
        $request = new Model\WithdrawCardBindRequest();

        $request->setMerchantNo("100400612345");
        $request->setBankCardType("bankCardType_example");
        $request->setAccountNo("accountNo_example");
        $request->setBankCode("当bankCardType为ENTERPRISE_ACCOUNT时必填；  示例值：ICBC");
        $request->setBranchCode("102100000048");
        try{
            $response = self::$client->withdrawCardBind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawCardBind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawCardModifyTest()
    {
        $request = new Model\WithdrawCardModifyRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setAccountNo("accountNo_example");
        $request->setBindId(789);
        $request->setBankCardOperateType("bankCardOperateType_example");
        $request->setBankCode("ICBC");
        $request->setBranchCode("102100000048");
        try{
            $response = self::$client->withdrawCardModify($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawCardModify: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawCardQueryTest()
    {
        $request = new Model\WithdrawCardQueryRequest();

        $request->setMerchantNo("易宝支付分配的的商户唯一标识  示例值:100400612345");
        try{
            $response = self::$client->withdrawCardQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawCardQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawOrderTest()
    {
        $request = new Model\WithdrawOrderRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("WITHDRAW20200327103027");
        $request->setMerchantNo("100400612345");
        $request->setBankCardId("11103");
        $request->setBankAccountNo("6212260200019388841");
        $request->setReceiveType("REAL_TIME");
        $request->setOrderAmount(1.00);
        $request->setNotifyUrl("www.baidu.com");
        $request->setRemark("XXX平台提现");
        $request->setTerminalType("PC");
        $request->setFeeDeductType("feeDeductType_example");
        try{
            $response = self::$client->withdrawOrder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawOrder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawQueryTest()
    {
        $request = new Model\WithdrawQueryRequest();

        $request->setParentMerchantNo("100400612345");
        $request->setRequestNo("WITHDRAW20200327103027");
        $request->setOrderNo("be54b037a981440a8cfcb0549aaf5344");
        try{
            $response = self::$client->withdrawQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function withdrawSystemQueryTest()
    {
        $request = new Model\WithdrawSystemQueryRequest();

        $request->setMerchantNo("易宝支付分配的的商户唯一标识;示例值:100400612345");
        $request->setRequestNo("WITHDRAW20200327103027");
        $request->setOrderNo("be54b037a981440a8cfcb0549aaf5344");
        try{
            $response = self::$client->withdrawSystemQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling AccountClient->withdrawSystemQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
}
