<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryOrderInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryOrderInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryOrderInfoResponseUnMarshaller();
    }

    /**
     * @return QueryOrderInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryOrderInfoResponse
     */
    protected function getResponseInstance()
    {
        return new QueryOrderInfoResponse();
    }
}

QueryOrderInfoResponseUnMarshaller::__init();
