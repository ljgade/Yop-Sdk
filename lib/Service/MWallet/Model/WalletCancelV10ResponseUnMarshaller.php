<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WalletCancelV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WalletCancelV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WalletCancelV10ResponseUnMarshaller();
    }

    /**
     * @return WalletCancelV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WalletCancelV10Response
     */
    protected function getResponseInstance()
    {
        return new WalletCancelV10Response();
    }
}

WalletCancelV10ResponseUnMarshaller::__init();
