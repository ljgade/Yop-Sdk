<?php


namespace Yeepay\Yop\Sdk\Service\TelPay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QrcodeQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QrcodeQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QrcodeQueryResponseUnMarshaller();
    }

    /**
     * @return QrcodeQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QrcodeQueryResponse
     */
    protected function getResponseInstance()
    {
        return new QrcodeQueryResponse();
    }
}

QrcodeQueryResponseUnMarshaller::__init();
