<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ExternalOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ExternalOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ExternalOrderResponseUnMarshaller();
    }

    /**
     * @return ExternalOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ExternalOrderResponse
     */
    protected function getResponseInstance()
    {
        return new ExternalOrderResponse();
    }
}

ExternalOrderResponseUnMarshaller::__init();
