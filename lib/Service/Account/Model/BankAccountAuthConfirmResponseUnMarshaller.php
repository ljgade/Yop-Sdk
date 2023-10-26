<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountAuthConfirmResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountAuthConfirmResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountAuthConfirmResponseUnMarshaller();
    }

    /**
     * @return BankAccountAuthConfirmResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountAuthConfirmResponse
     */
    protected function getResponseInstance()
    {
        return new BankAccountAuthConfirmResponse();
    }
}

BankAccountAuthConfirmResponseUnMarshaller::__init();
