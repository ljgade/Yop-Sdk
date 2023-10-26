<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Frontcashier\Model as Model;

class FrontcashierClientTest extends TestCase
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
        self::$client = FrontcashierClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function agreementNosmsbindTest()
    {
        $request = new Model\AgreementNosmsbindRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setUserNo("userNo_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setIdCardType("idCardType_example");
        $request->setUserName("userName_example");
        $request->setPhone("159****8288");
        $request->setCvv("cvv_example");
        $request->setValid("valid_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        try{
            $response = self::$client->agreementNosmsbind($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->agreementNosmsbind: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankTransferPayTest()
    {
        $request = new Model\BankTransferPayRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        $request->setOrderAmount(1.2);
        $request->setExpiredTime("2023-10-26 09:44:01");
        $request->setNotifyUrl("notifyUrl_example");
        $request->setMemo("memo_example");
        $request->setGoodsName("goodsName_example");
        $request->setFundProcessType("fundProcessType_example");
        $request->setCsUrl("csUrl_example");
        $request->setCheckType("checkType_example");
        $request->setToken("token_example");
        try{
            $response = self::$client->bankTransferPay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bankTransferPay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bankTransferQueryTest()
    {
        $request = new Model\BankTransferQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setOrderId("orderId_example");
        try{
            $response = self::$client->bankTransferQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bankTransferQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardConfirmTest()
    {
        $request = new Model\BindcardConfirmRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setEmpower(true);
        $request->setSmsCode("smsCode_example");
        try{
            $response = self::$client->bindcardConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardConfirmV2Test()
    {
        $request = new Model\BindcardConfirmV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setSmsCode("smsCode_example");
        try{
            $response = self::$client->bindcardConfirmV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardConfirmV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardGetcardbinTest()
    {
        $request = new Model\BindcardGetcardbinRequest();

        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        $request->setBankCardNo("688888888888");
        $request->setCardType("cardType_example");
        try{
            $response = self::$client->bindcardGetcardbin($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardGetcardbin: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardPayerrequestTest()
    {
        $request = new Model\BindcardPayerrequestRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardPayerrequestOpenPayerAuthBindCardRequestDTOParam());
        try{
            $response = self::$client->bindcardPayerrequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardPayerrequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardQueryorderTest()
    {
        $request = new Model\BindcardQueryorderRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setNopOrderId("nopOrderId_example");
        $request->setPhone("phone_example");
        try{
            $response = self::$client->bindcardQueryorder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardQueryorder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardQueryorderinfoTest()
    {
        $request = new Model\BindcardQueryorderinfoRequest();

        $request->setMerchantNo("10012426723");
        $request->setMerchantFlowId("order123456789");
        $request->setNopOrderId("NOP123456");
        try{
            $response = self::$client->bindcardQueryorderinfo($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardQueryorderinfo: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardRequestTest()
    {
        $request = new Model\BindcardRequestRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setUserName("userName_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setPhone("phone_example");
        $request->setCvv2("cvv2_example");
        $request->setValidthru("validthru_example");
        $request->setRiskParamExt("riskParamExt_example");
        $request->setOrderValidate(56);
        $request->setAuthType("authType_example");
        $request->setEmpower(true);
        $request->setCardType("cardType_example");
        $request->setIsSMS(true);
        try{
            $response = self::$client->bindcardRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardRequestV2Test()
    {
        $request = new Model\BindcardRequestV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setBankCardNo("bankCardNo_example");
        $request->setUserName("userName_example");
        $request->setIdCardType("idCardType_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setPhone("phone_example");
        $request->setCvv2("cvv2_example");
        $request->setValidthru("validthru_example");
        $request->setOrderValidate(56);
        $request->setAuthType("authType_example");
        $request->setCardType("cardType_example");
        $request->setIsSMS("isSMS_example");
        try{
            $response = self::$client->bindcardRequestV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardRequestV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardResendsmsV2Test()
    {
        $request = new Model\BindcardResendsmsV2Request();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        try{
            $response = self::$client->bindcardResendsmsV2($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardResendsmsV2: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindcardUnbindcardTest()
    {
        $request = new Model\BindcardUnbindcardRequest();

        $request->setMerchantNo("10012426723");
        $request->setUserNo("654321");
        $request->setUserType("USER_ID");
        $request->setBindId("123456");
        try{
            $response = self::$client->bindcardUnbindcard($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindcardUnbindcard: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindpayConfirmTest()
    {
        $request = new Model\BindpayConfirmRequest();

        $request->setToken("token_example");
        $request->setVersion("version_example");
        $request->setVerifyCode("verifyCode_example");
        $request->setCardno("cardno_example");
        $request->setOwner("owner_example");
        $request->setIdno("idno_example");
        $request->setPhoneNo("phoneNo_example");
        $request->setYpMobile("ypMobile_example");
        $request->setAvlidDate("avlidDate_example");
        $request->setCvv2("cvv2_example");
        $request->setIdCardType("idCardType_example");
        $request->setBankPWD("bankPWD_example");
        try{
            $response = self::$client->bindpayConfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindpayConfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindpayRequestTest()
    {
        $request = new Model\BindpayRequestRequest();

        $request->setToken("token_example");
        $request->setBindId("bindId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setUserIp("userIp_example");
        $request->setVersion("version_example");
        $request->setExtParamMap("extParamMap_example");
        $request->setPayMerchantNo("payMerchantNo_example");
        try{
            $response = self::$client->bindpayRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindpayRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function bindpaySendsmsTest()
    {
        $request = new Model\BindpaySendsmsRequest();

        $request->setToken("token_example");
        $request->setVersion("version_example");
        $request->setCardno("cardno_example");
        $request->setOwner("owner_example");
        $request->setIdno("idno_example");
        $request->setPhoneNo("phoneNo_example");
        $request->setYpMobile("ypMobile_example");
        $request->setAvlidDate("avlidDate_example");
        $request->setCvv2("cvv2_example");
        $request->setIdCardType("idCardType_example");
        $request->setBankPWD("bankPWD_example");
        try{
            $response = self::$client->bindpaySendsms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->bindpaySendsms: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function fastbindcardRequestTest()
    {
        $request = new Model\FastbindcardRequestRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setUserName("userName_example");
        $request->setIdCardNo("idCardNo_example");
        $request->setIdCardType("idCardType_example");
        $request->setBankCode("bankCode_example");
        $request->setCardType("cardType_example");
        $request->setPageReturnUrl("pageReturnUrl_example");
        $request->setBindNotifyUrl("bindNotifyUrl_example");
        $request->setPhone("phone_example");
        $request->setRiskParamExt("riskParamExt_example");
        $request->setOrderValidate(56);
        try{
            $response = self::$client->fastbindcardRequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->fastbindcardRequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function getcardbinTest()
    {
        $request = new Model\GetcardbinRequest();

        $request->setBankCardNo("bankCardNo_example");
        try{
            $response = self::$client->getcardbin($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->getcardbin: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function upopActivescanPayTest()
    {
        $request = new Model\UpopActivescanPayRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setPaySerialNo("paySerialNo_example");
        $request->setCouponSerialNo("couponSerialNo_example");
        $request->setTradeAmount(1.2);
        $request->setBindId(789);
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setCallBackUrl("callBackUrl_example");
        $request->setPayComments("payComments_example");
        $request->setDeviceID("deviceID_example");
        $request->setDeviceType("deviceType_example");
        $request->setAccountIDHash("accountIDHash_example");
        $request->setSourceIP("sourceIP_example");
        $request->setUsrRgstrDt("2023-10-26");
        $request->setAccountEmailLife("accountEmailLife_example");
        $request->setDeviceLocation("deviceLocation_example");
        $request->setFullDeviceNumber("fullDeviceNumber_example");
        $request->setCaptureMethod("captureMethod_example");
        $request->setDeviceSimNumber("deviceSimNumber_example");
        $request->setDeviceName("deviceName_example");
        try{
            $response = self::$client->upopActivescanPay($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopActivescanPay: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function upopActivescanQuerycouponTest()
    {
        $request = new Model\UpopActivescanQuerycouponRequest();

        $request->setMerchantFlowId("221007104428249784269");
        $request->setPaySerialNo("paySerialNo_example");
        $request->setTradeAmount(1.2);
        $request->setBindId(123456);
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setRiskInfoDeviceID("riskInfoDeviceID_example");
        $request->setRiskInfoDeviceType("riskInfoDeviceType_example");
        $request->setRiskInfoAccountIDHash("riskInfoAccountIDHash_example");
        $request->setRiskInfoSourceIP("riskInfoSourceIP_example");
        try{
            $response = self::$client->upopActivescanQuerycoupon($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopActivescanQuerycoupon: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function upopActivescanQuerypayeeorderTest()
    {
        $request = new Model\UpopActivescanQuerypayeeorderRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setQrCode("qrCode_example");
        try{
            $response = self::$client->upopActivescanQuerypayeeorder($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopActivescanQuerypayeeorder: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function upopActivescanQuerypayresultTest()
    {
        $request = new Model\UpopActivescanQuerypayresultRequest();

        $request->setBody(new \Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayresultOpenQueryActiveScanPayResultRequestDTOParam());
        try{
            $response = self::$client->upopActivescanQuerypayresult($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopActivescanQuerypayresult: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function upopPassivescanValidateTest()
    {
        $request = new Model\UpopPassivescanValidateRequest();

        $request->setMerchantFlowId("merchantFlowId_example");
        $request->setPayOrderNo("payOrderNo_example");
        $request->setCouponInfo("couponInfo_example");
        $request->setRealTradeAmount(1.2);
        try{
            $response = self::$client->upopPassivescanValidate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->upopPassivescanValidate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function yjzfBindpayrequestTest()
    {
        $request = new Model\YjzfBindpayrequestRequest();

        $request->setBindId("bindId_example");
        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setUserIp("userIp_example");
        $request->setPaymentExt("paymentExt_example");
        $request->setToken("token_example");
        $request->setVersion("version_example");
        try{
            $response = self::$client->yjzfBindpayrequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->yjzfBindpayrequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function yjzfFirstpayrequestTest()
    {
        $request = new Model\YjzfFirstpayrequestRequest();

        $request->setUserNo("userNo_example");
        $request->setUserType("userType_example");
        $request->setUserIp("userIp_example");
        $request->setCardNo("cardNo_example");
        $request->setOwner("owner_example");
        $request->setIdNo("idNo_example");
        $request->setPhoneNo("phoneNo_example");
        $request->setCvv("cvv_example");
        $request->setAvlidDate("avlidDate_example");
        $request->setPaymentExt("paymentExt_example");
        $request->setToken("token_example");
        $request->setVersion("version_example");
        try{
            $response = self::$client->yjzfFirstpayrequest($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->yjzfFirstpayrequest: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function yjzfPaymentconfirmTest()
    {
        $request = new Model\YjzfPaymentconfirmRequest();

        $request->setRecordId("recordId_example");
        $request->setVerifyCode("verifyCode_example");
        $request->setOwner("owner_example");
        $request->setIdNo("idNo_example");
        $request->setPhoneNo("phoneNo_example");
        $request->setCvv("cvv_example");
        $request->setAvlidDate("avlidDate_example");
        $request->setBankPWD("bankPWD_example");
        $request->setPaymentExt("paymentExt_example");
        $request->setToken("token_example");
        $request->setVersion("version_example");
        try{
            $response = self::$client->yjzfPaymentconfirm($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->yjzfPaymentconfirm: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function yjzfSendsmsTest()
    {
        $request = new Model\YjzfSendsmsRequest();

        $request->setRecordId("recordId_example");
        $request->setOwner("owner_example");
        $request->setIdNo("idNo_example");
        $request->setPhoneNo("phoneNo_example");
        $request->setCvv("cvv_example");
        $request->setAvlidDate("avlidDate_example");
        $request->setBankPWD("bankPWD_example");
        $request->setPaymentExt("paymentExt_example");
        $request->setToken("token_example");
        $request->setVersion("version_example");
        try{
            $response = self::$client->yjzfSendsms($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling FrontcashierClient->yjzfSendsms: ', $e->getMessage(), PHP_EOL;
        }
    }
}
