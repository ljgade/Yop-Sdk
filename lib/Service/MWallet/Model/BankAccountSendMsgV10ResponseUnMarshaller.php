<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountSendMsgV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountSendMsgV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountSendMsgV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountSendMsgV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountSendMsgV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountSendMsgV10Response();
    }
}

BankAccountSendMsgV10ResponseUnMarshaller::__init();
