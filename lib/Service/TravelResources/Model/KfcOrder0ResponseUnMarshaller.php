<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class KfcOrder0ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var KfcOrder0ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new KfcOrder0ResponseUnMarshaller();
    }

    /**
     * @return KfcOrder0ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return KfcOrder0Response
     */
    protected function getResponseInstance()
    {
        return new KfcOrder0Response();
    }
}

KfcOrder0ResponseUnMarshaller::__init();
