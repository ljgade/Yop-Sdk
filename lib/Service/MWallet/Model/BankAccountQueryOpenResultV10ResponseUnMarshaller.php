<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryOpenResultV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryOpenResultV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryOpenResultV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryOpenResultV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryOpenResultV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryOpenResultV10Response();
    }
}

BankAccountQueryOpenResultV10ResponseUnMarshaller::__init();
