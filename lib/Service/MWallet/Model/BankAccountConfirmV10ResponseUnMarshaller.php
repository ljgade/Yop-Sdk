<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountConfirmV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountConfirmV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountConfirmV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountConfirmV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountConfirmV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountConfirmV10Response();
    }
}

BankAccountConfirmV10ResponseUnMarshaller::__init();
