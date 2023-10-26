<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountOpenV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountOpenV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountOpenV10ResponseUnMarshaller();
    }

    /**
     * @return AccountOpenV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountOpenV10Response
     */
    protected function getResponseInstance()
    {
        return new AccountOpenV10Response();
    }
}

AccountOpenV10ResponseUnMarshaller::__init();
