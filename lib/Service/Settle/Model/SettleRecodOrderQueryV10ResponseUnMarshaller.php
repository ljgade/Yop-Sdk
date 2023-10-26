<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleRecodOrderQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleRecodOrderQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleRecodOrderQueryV10ResponseUnMarshaller();
    }

    /**
     * @return SettleRecodOrderQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleRecodOrderQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new SettleRecodOrderQueryV10Response();
    }
}

SettleRecodOrderQueryV10ResponseUnMarshaller::__init();
