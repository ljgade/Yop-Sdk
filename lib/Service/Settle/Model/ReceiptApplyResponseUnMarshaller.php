<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ReceiptApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ReceiptApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ReceiptApplyResponseUnMarshaller();
    }

    /**
     * @return ReceiptApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ReceiptApplyResponse
     */
    protected function getResponseInstance()
    {
        return new ReceiptApplyResponse();
    }
}

ReceiptApplyResponseUnMarshaller::__init();
