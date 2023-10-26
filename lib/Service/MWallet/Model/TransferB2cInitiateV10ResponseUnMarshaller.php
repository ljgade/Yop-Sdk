<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2cInitiateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2cInitiateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2cInitiateV10ResponseUnMarshaller();
    }

    /**
     * @return TransferB2cInitiateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2cInitiateV10Response
     */
    protected function getResponseInstance()
    {
        return new TransferB2cInitiateV10Response();
    }
}

TransferB2cInitiateV10ResponseUnMarshaller::__init();
