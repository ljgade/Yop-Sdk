<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentQueryWeb3V10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentQueryWeb3V10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentQueryWeb3V10ResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentQueryWeb3V10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentQueryWeb3V10Response
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentQueryWeb3V10Response();
    }
}

AgreementPaymentQueryWeb3V10ResponseUnMarshaller::__init();
