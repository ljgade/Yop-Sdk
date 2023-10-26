<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementPaymentNotifyWeb3ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementPaymentNotifyWeb3ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementPaymentNotifyWeb3ResponseUnMarshaller();
    }

    /**
     * @return AgreementPaymentNotifyWeb3ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementPaymentNotifyWeb3Response
     */
    protected function getResponseInstance()
    {
        return new AgreementPaymentNotifyWeb3Response();
    }
}

AgreementPaymentNotifyWeb3ResponseUnMarshaller::__init();
