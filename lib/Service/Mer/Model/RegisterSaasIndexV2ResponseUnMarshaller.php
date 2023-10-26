<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterSaasIndexV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterSaasIndexV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterSaasIndexV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterSaasIndexV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterSaasIndexV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterSaasIndexV2Response();
    }
}

RegisterSaasIndexV2ResponseUnMarshaller::__init();
