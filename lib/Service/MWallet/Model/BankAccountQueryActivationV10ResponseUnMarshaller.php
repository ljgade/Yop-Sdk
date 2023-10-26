<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryActivationV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryActivationV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryActivationV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryActivationV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryActivationV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryActivationV10Response();
    }
}

BankAccountQueryActivationV10ResponseUnMarshaller::__init();
