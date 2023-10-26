<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryTradeV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryTradeV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryTradeV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryTradeV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryTradeV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryTradeV10Response();
    }
}

BankAccountQueryTradeV10ResponseUnMarshaller::__init();
