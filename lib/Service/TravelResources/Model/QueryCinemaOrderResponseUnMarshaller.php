<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryCinemaOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryCinemaOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryCinemaOrderResponseUnMarshaller();
    }

    /**
     * @return QueryCinemaOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryCinemaOrderResponse
     */
    protected function getResponseInstance()
    {
        return new QueryCinemaOrderResponse();
    }
}

QueryCinemaOrderResponseUnMarshaller::__init();
