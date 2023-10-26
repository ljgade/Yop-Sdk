<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SettleReceiptApplyV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SettleReceiptApplyV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SettleReceiptApplyV10ResponseUnMarshaller();
    }

    /**
     * @return SettleReceiptApplyV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SettleReceiptApplyV10Response
     */
    protected function getResponseInstance()
    {
        return new SettleReceiptApplyV10Response();
    }
}

SettleReceiptApplyV10ResponseUnMarshaller::__init();
