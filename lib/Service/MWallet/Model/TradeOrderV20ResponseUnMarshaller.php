<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeOrderV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeOrderV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeOrderV20ResponseUnMarshaller();
    }

    /**
     * @return TradeOrderV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeOrderV20Response
     */
    protected function getResponseInstance()
    {
        return new TradeOrderV20Response();
    }
}

TradeOrderV20ResponseUnMarshaller::__init();
