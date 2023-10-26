<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountWithdrawV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountWithdrawV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountWithdrawV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountWithdrawV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountWithdrawV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountWithdrawV10Response();
    }
}

BankAccountWithdrawV10ResponseUnMarshaller::__init();
