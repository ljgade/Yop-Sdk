<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BankAccountOpenV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BankAccountOpenV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BankAccountOpenV10ResponseUnMarshaller();
    }

    /**
     * @return BankAccountOpenV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BankAccountOpenV10Response
     */
    protected function getResponseInstance()
    {
        return new BankAccountOpenV10Response();
    }
}

BankAccountOpenV10ResponseUnMarshaller::__init();
