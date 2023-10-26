<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RecordsOrderQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RecordsOrderQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RecordsOrderQueryResponseUnMarshaller();
    }

    /**
     * @return RecordsOrderQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RecordsOrderQueryResponse
     */
    protected function getResponseInstance()
    {
        return new RecordsOrderQueryResponse();
    }
}

RecordsOrderQueryResponseUnMarshaller::__init();
