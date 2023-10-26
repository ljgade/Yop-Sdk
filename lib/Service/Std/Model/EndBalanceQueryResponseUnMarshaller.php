<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EndBalanceQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EndBalanceQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EndBalanceQueryResponseUnMarshaller();
    }

    /**
     * @return EndBalanceQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EndBalanceQueryResponse
     */
    protected function getResponseInstance()
    {
        return new EndBalanceQueryResponse();
    }
}

EndBalanceQueryResponseUnMarshaller::__init();
