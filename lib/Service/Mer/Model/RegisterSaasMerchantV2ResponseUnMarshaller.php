<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterSaasMerchantV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterSaasMerchantV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterSaasMerchantV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterSaasMerchantV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterSaasMerchantV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterSaasMerchantV2Response();
    }
}

RegisterSaasMerchantV2ResponseUnMarshaller::__init();
