<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountManageBankAccountQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountManageBankAccountQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountManageBankAccountQueryV10ResponseUnMarshaller();
    }

    /**
     * @return AccountManageBankAccountQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountManageBankAccountQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new AccountManageBankAccountQueryV10Response();
    }
}

AccountManageBankAccountQueryV10ResponseUnMarshaller::__init();
