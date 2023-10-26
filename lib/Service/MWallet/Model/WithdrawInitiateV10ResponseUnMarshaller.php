<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawInitiateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawInitiateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawInitiateV10ResponseUnMarshaller();
    }

    /**
     * @return WithdrawInitiateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawInitiateV10Response
     */
    protected function getResponseInstance()
    {
        return new WithdrawInitiateV10Response();
    }
}

WithdrawInitiateV10ResponseUnMarshaller::__init();
