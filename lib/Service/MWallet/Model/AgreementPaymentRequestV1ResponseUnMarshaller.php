<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentRequestV1ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentRequestV1ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentRequestV1ResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentRequestV1ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentRequestV1Response
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentRequestV1Response();
    }
}

AgreementPaymentRequestV1ResponseUnMarshaller::__init();
