<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterSaasWebIndexV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterSaasWebIndexV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterSaasWebIndexV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterSaasWebIndexV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterSaasWebIndexV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterSaasWebIndexV2Response();
    }
}

RegisterSaasWebIndexV2ResponseUnMarshaller::__init();
