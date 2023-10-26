<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryConsumeRecordAdapterResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryConsumeRecordAdapterResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryConsumeRecordAdapterResponseUnMarshaller();
    }

    /**
     * @return QueryConsumeRecordAdapterResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryConsumeRecordAdapterResponse
     */
    protected function getResponseInstance()
    {
        return new QueryConsumeRecordAdapterResponse();
    }
}

QueryConsumeRecordAdapterResponseUnMarshaller::__init();
