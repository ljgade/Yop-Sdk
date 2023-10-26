<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class KfcOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var KfcOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new KfcOrderResponseUnMarshaller();
    }

    /**
     * @return KfcOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return KfcOrderResponse
     */
    protected function getResponseInstance()
    {
        return new KfcOrderResponse();
    }
}

KfcOrderResponseUnMarshaller::__init();
