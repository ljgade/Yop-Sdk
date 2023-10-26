<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RechargeQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RechargeQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RechargeQueryV10ResponseUnMarshaller();
    }

    /**
     * @return RechargeQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RechargeQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new RechargeQueryV10Response();
    }
}

RechargeQueryV10ResponseUnMarshaller::__init();
