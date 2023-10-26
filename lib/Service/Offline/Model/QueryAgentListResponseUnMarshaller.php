<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryAgentListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryAgentListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryAgentListResponseUnMarshaller();
    }

    /**
     * @return QueryAgentListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryAgentListResponse
     */
    protected function getResponseInstance()
    {
        return new QueryAgentListResponse();
    }
}

QueryAgentListResponseUnMarshaller::__init();
