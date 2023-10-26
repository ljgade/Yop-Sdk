<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryKfcOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryKfcOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryKfcOrderResponseUnMarshaller();
    }

    /**
     * @return QueryKfcOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryKfcOrderResponse
     */
    protected function getResponseInstance()
    {
        return new QueryKfcOrderResponse();
    }
}

QueryKfcOrderResponseUnMarshaller::__init();
