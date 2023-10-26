<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RegisterSaasMicroV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RegisterSaasMicroV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterSaasMicroV2ResponseUnMarshaller();
    }

    /**
     * @return RegisterSaasMicroV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RegisterSaasMicroV2Response
     */
    protected function getResponseInstance()
    {
        return new RegisterSaasMicroV2Response();
    }
}

RegisterSaasMicroV2ResponseUnMarshaller::__init();
