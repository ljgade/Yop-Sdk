<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WalletIndexV20ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WalletIndexV20ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WalletIndexV20ResponseUnMarshaller();
    }

    /**
     * @return WalletIndexV20ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WalletIndexV20Response
     */
    protected function getResponseInstance()
    {
        return new WalletIndexV20Response();
    }
}

WalletIndexV20ResponseUnMarshaller::__init();
