<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentCancelWeb3V10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentCancelWeb3V10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentCancelWeb3V10ResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentCancelWeb3V10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentCancelWeb3V10Response
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentCancelWeb3V10Response();
    }
}

AgreementPaymentCancelWeb3V10ResponseUnMarshaller::__init();
