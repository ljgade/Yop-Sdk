<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentRequestResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentRequestResponse
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentRequestResponse();
    }
}

AgreementPaymentRequestResponseUnMarshaller::__init();
