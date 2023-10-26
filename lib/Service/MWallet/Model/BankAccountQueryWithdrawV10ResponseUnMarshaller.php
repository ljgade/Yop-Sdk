<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryWithdrawV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryWithdrawV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryWithdrawV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryWithdrawV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryWithdrawV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryWithdrawV10Response();
    }
}

BankAccountQueryWithdrawV10ResponseUnMarshaller::__init();
