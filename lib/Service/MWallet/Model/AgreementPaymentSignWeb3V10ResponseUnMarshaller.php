<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentSignWeb3V10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentSignWeb3V10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentSignWeb3V10ResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentSignWeb3V10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentSignWeb3V10Response
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentSignWeb3V10Response();
    }
}

AgreementPaymentSignWeb3V10ResponseUnMarshaller::__init();
