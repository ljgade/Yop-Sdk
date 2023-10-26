<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeOrderV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeOrderV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeOrderV10ResponseUnMarshaller();
    }

    /**
     * @return TradeOrderV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeOrderV10Response
     */
    protected function getResponseInstance()
    {
        return new TradeOrderV10Response();
    }
}

TradeOrderV10ResponseUnMarshaller::__init();
