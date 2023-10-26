<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class Web3AgreementPaymentCancelResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var Web3AgreementPaymentCancelResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new Web3AgreementPaymentCancelResponseUnMarshaller();
    }

    /**
     * @return Web3AgreementPaymentCancelResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return Web3AgreementPaymentCancelResponse
     */
    protected function getResponseInstance()
    {
        return new Web3AgreementPaymentCancelResponse();
    }
}

Web3AgreementPaymentCancelResponseUnMarshaller::__init();
