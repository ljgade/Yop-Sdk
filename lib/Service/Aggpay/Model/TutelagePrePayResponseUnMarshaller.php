<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TutelagePrePayResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TutelagePrePayResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TutelagePrePayResponseUnMarshaller();
    }

    /**
     * @return TutelagePrePayResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TutelagePrePayResponse
     */
    protected function getResponseInstance()
    {
        return new TutelagePrePayResponse();
    }
}

TutelagePrePayResponseUnMarshaller::__init();
