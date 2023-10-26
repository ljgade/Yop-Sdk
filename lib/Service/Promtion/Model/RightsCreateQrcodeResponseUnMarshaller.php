<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RightsCreateQrcodeResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RightsCreateQrcodeResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RightsCreateQrcodeResponseUnMarshaller();
    }

    /**
     * @return RightsCreateQrcodeResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RightsCreateQrcodeResponse
     */
    protected function getResponseInstance()
    {
        return new RightsCreateQrcodeResponse();
    }
}

RightsCreateQrcodeResponseUnMarshaller::__init();
