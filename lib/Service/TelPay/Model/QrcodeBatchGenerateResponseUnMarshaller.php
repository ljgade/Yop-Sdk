<?php


namespace Yeepay\Yop\Sdk\Service\TelPay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QrcodeBatchGenerateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QrcodeBatchGenerateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QrcodeBatchGenerateResponseUnMarshaller();
    }

    /**
     * @return QrcodeBatchGenerateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QrcodeBatchGenerateResponse
     */
    protected function getResponseInstance()
    {
        return new QrcodeBatchGenerateResponse();
    }
}

QrcodeBatchGenerateResponseUnMarshaller::__init();
