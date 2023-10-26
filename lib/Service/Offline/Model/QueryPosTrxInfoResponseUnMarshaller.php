<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryPosTrxInfoResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryPosTrxInfoResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryPosTrxInfoResponseUnMarshaller();
    }

    /**
     * @return QueryPosTrxInfoResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryPosTrxInfoResponse
     */
    protected function getResponseInstance()
    {
        return new QueryPosTrxInfoResponse();
    }
}

QueryPosTrxInfoResponseUnMarshaller::__init();
