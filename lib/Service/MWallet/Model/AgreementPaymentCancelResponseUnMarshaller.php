<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentCancelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentCancelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentCancelResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentCancelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentCancelResponse
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentCancelResponse();
    }
}

AgreementPaymentCancelResponseUnMarshaller::__init();
