<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeInitiateV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeInitiateV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeInitiateV10ResponseUnMarshaller();
    }

    /**
     * @return RechargeInitiateV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeInitiateV10Response
     */
    protected function getResponseInstance()
    {
        return new RechargeInitiateV10Response();
    }
}

RechargeInitiateV10ResponseUnMarshaller::__init();
