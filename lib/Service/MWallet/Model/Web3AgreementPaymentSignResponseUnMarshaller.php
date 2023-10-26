<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class Web3AgreementPaymentSignResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var Web3AgreementPaymentSignResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new Web3AgreementPaymentSignResponseUnMarshaller();
    }

    /**
     * @return Web3AgreementPaymentSignResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return Web3AgreementPaymentSignResponse
     */
    protected function getResponseInstance()
    {
        return new Web3AgreementPaymentSignResponse();
    }
}

Web3AgreementPaymentSignResponseUnMarshaller::__init();
