<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentQueryResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentQueryResponse();
    }
}

AgreementPaymentQueryResponseUnMarshaller::__init();
