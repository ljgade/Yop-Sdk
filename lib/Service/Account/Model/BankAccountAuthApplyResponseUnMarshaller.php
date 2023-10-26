<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountAuthApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountAuthApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountAuthApplyResponseUnMarshaller();
    }

    /**
     * @return BankAccountAuthApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountAuthApplyResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountAuthApplyResponse();
    }
}

BankAccountAuthApplyResponseUnMarshaller::__init();
