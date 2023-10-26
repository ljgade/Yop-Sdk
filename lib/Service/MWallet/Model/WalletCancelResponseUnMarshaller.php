<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WalletCancelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WalletCancelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WalletCancelResponseUnMarshaller();
    }

    /**
     * @return WalletCancelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WalletCancelResponse
     */
    protected function getResponseInstance()
    {
        return new WalletCancelResponse();
    }
}

WalletCancelResponseUnMarshaller::__init();
