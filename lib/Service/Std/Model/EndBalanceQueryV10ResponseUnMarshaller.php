<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class EndBalanceQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var EndBalanceQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new EndBalanceQueryV10ResponseUnMarshaller();
    }

    /**
     * @return EndBalanceQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return EndBalanceQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new EndBalanceQueryV10Response();
    }
}

EndBalanceQueryV10ResponseUnMarshaller::__init();
