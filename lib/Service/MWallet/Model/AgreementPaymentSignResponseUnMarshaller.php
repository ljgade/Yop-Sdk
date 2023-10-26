<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentSignResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentSignResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentSignResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentSignResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentSignResponse
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentSignResponse();
    }
}

AgreementPaymentSignResponseUnMarshaller::__init();
