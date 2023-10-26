<?php


namespace Yeepay\Yop\Sdk\Service\Promtion;


use PHPUnit\Framework\TestCase;
use Yeepay\Yop\Sdk\Config\AppSdkConfig;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Promtion\Model as Model;

class PromtionClientTest extends TestCase
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
        self::$client = PromtionClientBuilder::builder($appSdkConfig)->build();
    }

    /**
     * @test
     */
    public function activityListQueryTest()
    {
        $request = new Model\ActivityListQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantActivityNo("merchantActivityNo_example");
        $request->setMarketingNo("marketingNo_example");
        $request->setActivityStatus("activityStatus_example");
        $request->setPageNo(56);
        $request->setPageSize(56);
        try{
            $response = self::$client->activityListQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->activityListQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function addRightsTest()
    {
        $request = new Model\AddRightsRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRightsCode("rightsCode_example");
        $request->setStartEffectDate("startEffectDate_example");
        $request->setEndEffectDate("endEffectDate_example");
        $request->setBrandNo("brandNo_example");
        $request->setTitle("title_example");
        $request->setRuleDesc("ruleDesc_example");
        $request->setPeriodType("periodType_example");
        $request->setPeriod(56);
        $request->setFrequency(56);
        $request->setBusinessType("businessType_example");
        $request->setUserNo("userNo_example");
        $request->setProductNo("productNo_example");
        $request->setProductName("productName_example");
        try{
            $response = self::$client->addRights($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->addRights: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function add_rightsTest()
    {
        $request = new Model\AddRightsRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setRightsCode("rightsCode_example");
        $request->setStartEffectDate("startEffectDate_example");
        $request->setEndEffectDate("endEffectDate_example");
        $request->setBrandNo("brandNo_example");
        $request->setTitle("title_example");
        $request->setRuleDesc("ruleDesc_example");
        $request->setPeriodType("periodType_example");
        $request->setPeriod(56);
        $request->setFrequency(56);
        $request->setBusinessType("businessType_example");
        $request->setUserNo("userNo_example");
        $request->setProductNo("productNo_example");
        $request->setProductName("productName_example");
        try{
            $response = self::$client->add_rights($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->add_rights: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function couponApplyTest()
    {
        $request = new Model\CouponApplyRequest();

        $request->setRequestNo("requestNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setMerchantActivityNo("merchantActivityNo_example");
        $request->setMarketingNo("marketingNo_example");
        try{
            $response = self::$client->couponApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->couponApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function couponListQueryTest()
    {
        $request = new Model\CouponListQueryRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setCouponStatus("couponStatus_example");
        $request->setCouponType("couponType_example");
        $request->setStartTime("2023-10-26 09:44:03");
        $request->setEndTime("yyyy-MM-dd HH:mm:ss");
        $request->setPageNo(56);
        $request->setPageSize(56);
        try{
            $response = self::$client->couponListQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->couponListQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function create_rights_qrcode_adapterTest()
    {
        $request = new Model\CreateRightsQrcodeAdapterRequest();

        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setRightsCode("rightsCode_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setUserNo("userNo_example");
        try{
            $response = self::$client->create_rights_qrcode_adapter($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->create_rights_qrcode_adapter: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function frozen_rightsTest()
    {
        $request = new Model\FrozenRightsRequest();

        $request->setProductNo("productNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->frozen_rights($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->frozen_rights: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function pointCreateTest()
    {
        $request = new Model\PointCreateRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        try{
            $response = self::$client->pointCreate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->pointCreate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function pointOperateTest()
    {
        $request = new Model\PointOperateRequest();

        $request->setRequestId("requestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        $request->setPoint(1.2);
        $request->setPayDirection("payDirection_example");
        $request->setRemark("remark_example");
        try{
            $response = self::$client->pointOperate($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->pointOperate: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function pointQueryTest()
    {
        $request = new Model\PointQueryRequest();

        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setMerchantUserNo("merchantUserNo_example");
        try{
            $response = self::$client->pointQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->pointQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function query_consume_record_adapterTest()
    {
        $request = new Model\QueryConsumeRecordAdapterRequest();

        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setUserNo("userNo_example");
        $request->setPageNo(56);
        $request->setPageSize(56);
        $request->setConsumeTimeEnd("consumeTimeEnd_example");
        $request->setConsumeTimeStart("consumeTimeStart_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->query_consume_record_adapter($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->query_consume_record_adapter: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function query_rightsTest()
    {
        $request = new Model\QueryRightsRequest();

        $request->setUserNo("userNo_example");
        $request->setPageNo(56);
        $request->setPageSize(56);
        $request->setMerchantNo("merchantNo_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        try{
            $response = self::$client->query_rights($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->query_rights: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rightsCreateQrcodeTest()
    {
        $request = new Model\RightsCreateQrcodeRequest();

        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setRightsCode("rightsCode_example");
        $request->setMerchantNo("merchantNo_example");
        $request->setUserNo("userNo_example");
        try{
            $response = self::$client->rightsCreateQrcode($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->rightsCreateQrcode: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rightsFrozenRightsTest()
    {
        $request = new Model\RightsFrozenRightsRequest();

        $request->setProductNo("productNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->rightsFrozenRights($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->rightsFrozenRights: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rightsQueryConsumeRecordsTest()
    {
        $request = new Model\RightsQueryConsumeRecordsRequest();

        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        $request->setUserNo("userNo_example");
        $request->setPageNo(56);
        $request->setPageSize(56);
        $request->setConsumeTimeEnd("consumeTimeEnd_example");
        $request->setConsumeTimeStart("consumeTimeStart_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->rightsQueryConsumeRecords($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->rightsQueryConsumeRecords: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rightsQueryRightsTest()
    {
        $request = new Model\RightsQueryRightsRequest();

        $request->setUserNo("userNo_example");
        $request->setPageNo(56);
        $request->setPageSize(56);
        $request->setMerchantNo("merchantNo_example");
        $request->setOperatedMerchantNo("operatedMerchantNo_example");
        try{
            $response = self::$client->rightsQueryRights($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->rightsQueryRights: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rightsTransferTest()
    {
        $request = new Model\RightsTransferRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setUserNo("userNo_example");
        $request->setProductNo("productNo_example");
        try{
            $response = self::$client->rightsTransfer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->rightsTransfer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function rights_transferTest()
    {
        $request = new Model\RightsTransferRequest();

        $request->setMerchantNo("merchantNo_example");
        $request->setUserNo("userNo_example");
        $request->setProductNo("productNo_example");
        try{
            $response = self::$client->rights_transfer($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->rights_transfer: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function subsidyApplyTest()
    {
        $request = new Model\SubsidyApplyRequest();

        $request->setOrderId("orderId_example");
        $request->setUniqueOrderNo("1001201612070000000000000565");
        $request->setSubsidyRequestId("subsidyRequestId_example");
        $request->setSubsidyAmount("12.34");
        $request->setAssumeMerchantNo("assumeMerchantNo_example");
        $request->setMemo("memo_example");
        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        try{
            $response = self::$client->subsidyApply($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->subsidyApply: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function subsidyBackTest()
    {
        $request = new Model\SubsidyBackRequest();

        $request->setOrderId("orderId_example");
        $request->setSubsidyRequestId("subsidyRequestId_example");
        $request->setSubsidyBackRequestId("subsidyBackRequestId_example");
        $request->setSubsidyBackAmount("12.34");
        $request->setReturnAccountType("returnAccountType_example");
        $request->setMemo("memo_example");
        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        try{
            $response = self::$client->subsidyBack($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->subsidyBack: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function subsidyBackQueryTest()
    {
        $request = new Model\SubsidyBackQueryRequest();

        $request->setSubsidyRequestId("subsidyRequestId_example");
        $request->setSubsidyBackRequestId("subsidyBackRequestId_example");
        $request->setParentMerchantNo("parentMerchantNo_example");
        $request->setMerchantNo("merchantNo_example");
        try{
            $response = self::$client->subsidyBackQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->subsidyBackQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
    /**
     * @test
     */
    public function subsidyQueryTest()
    {
        $request = new Model\SubsidyQueryRequest();

        $request->setOrderId("orderId_example");
        $request->setSubsidyRequestId("subsidyRequestId_example");
        $request->setParentMerchantNo("10012426723");
        $request->setMerchantNo("10012426723");
        try{
            $response = self::$client->subsidyQuery($request);
            print_r($response->getResult());
        }catch (\Exception $e) {
            echo 'Exception when calling PromtionClient->subsidyQuery: ', $e->getMessage(), PHP_EOL;
        }
    }
}
