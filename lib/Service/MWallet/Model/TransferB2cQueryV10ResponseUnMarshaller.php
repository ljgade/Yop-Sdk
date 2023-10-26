<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TransferB2cQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TransferB2cQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TransferB2cQueryV10ResponseUnMarshaller();
    }

    /**
     * @return TransferB2cQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TransferB2cQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new TransferB2cQueryV10Response();
    }
}

TransferB2cQueryV10ResponseUnMarshaller::__init();
