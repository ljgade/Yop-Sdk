<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryRightsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryRightsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryRightsResponseUnMarshaller();
    }

    /**
     * @return QueryRightsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryRightsResponse
     */
    protected function getResponseInstance()
    {
        return new QueryRightsResponse();
    }
}

QueryRightsResponseUnMarshaller::__init();
