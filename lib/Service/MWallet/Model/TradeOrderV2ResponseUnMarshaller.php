<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeOrderV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeOrderV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeOrderV2ResponseUnMarshaller();
    }

    /**
     * @return TradeOrderV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeOrderV2Response
     */
    protected function getResponseInstance()
    {
        return new TradeOrderV2Response();
    }
}

TradeOrderV2ResponseUnMarshaller::__init();
