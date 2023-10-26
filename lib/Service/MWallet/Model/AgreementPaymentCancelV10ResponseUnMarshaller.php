<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentCancelV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentCancelV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentCancelV10ResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentCancelV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentCancelV10Response
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentCancelV10Response();
    }
}

AgreementPaymentCancelV10ResponseUnMarshaller::__init();
