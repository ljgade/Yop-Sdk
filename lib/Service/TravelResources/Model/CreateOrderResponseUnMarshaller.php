<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreateOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreateOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreateOrderResponseUnMarshaller();
    }

    /**
     * @return CreateOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreateOrderResponse
     */
    protected function getResponseInstance()
    {
        return new CreateOrderResponse();
    }
}

CreateOrderResponseUnMarshaller::__init();
