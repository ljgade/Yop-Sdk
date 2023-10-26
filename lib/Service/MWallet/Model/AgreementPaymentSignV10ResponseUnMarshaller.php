<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentSignV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentSignV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentSignV10ResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentSignV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentSignV10Response
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentSignV10Response();
    }
}

AgreementPaymentSignV10ResponseUnMarshaller::__init();
