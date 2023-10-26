<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountUpdateKeyWordsV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountUpdateKeyWordsV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountUpdateKeyWordsV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountUpdateKeyWordsV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountUpdateKeyWordsV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountUpdateKeyWordsV10Response();
    }
}

BankAccountUpdateKeyWordsV10ResponseUnMarshaller::__init();
