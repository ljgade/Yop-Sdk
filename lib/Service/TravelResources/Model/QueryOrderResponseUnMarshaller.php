<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryOrderResponseUnMarshaller();
    }

    /**
     * @return QueryOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryOrderResponse
     */
    protected function getResponseInstance()
    {
        return new QueryOrderResponse();
    }
}

QueryOrderResponseUnMarshaller::__init();
