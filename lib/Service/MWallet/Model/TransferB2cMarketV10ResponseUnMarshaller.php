<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2cMarketV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2cMarketV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2cMarketV10ResponseUnMarshaller();
    }

    /**
     * @return TransferB2cMarketV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2cMarketV10Response
     */
    protected function getResponseInstance()
    {
        return new TransferB2cMarketV10Response();
    }
}

TransferB2cMarketV10ResponseUnMarshaller::__init();
