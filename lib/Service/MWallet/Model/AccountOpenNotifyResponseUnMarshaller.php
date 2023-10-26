<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountOpenNotifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountOpenNotifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountOpenNotifyResponseUnMarshaller();
    }

    /**
     * @return AccountOpenNotifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountOpenNotifyResponse
     */
    protected function getResponseInstance()
    {
        return new AccountOpenNotifyResponse();
    }
}

AccountOpenNotifyResponseUnMarshaller::__init();
