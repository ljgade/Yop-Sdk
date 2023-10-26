<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class Web3AgreementPaymentQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var Web3AgreementPaymentQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new Web3AgreementPaymentQueryResponseUnMarshaller();
    }

    /**
     * @return Web3AgreementPaymentQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return Web3AgreementPaymentQueryResponse
     */
    protected function getResponseInstance()
    {
        return new Web3AgreementPaymentQueryResponse();
    }
}

Web3AgreementPaymentQueryResponseUnMarshaller::__init();
