<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountQueryComplaintV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountQueryComplaintV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountQueryComplaintV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountQueryComplaintV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountQueryComplaintV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountQueryComplaintV10Response();
    }
}

BankAccountQueryComplaintV10ResponseUnMarshaller::__init();
