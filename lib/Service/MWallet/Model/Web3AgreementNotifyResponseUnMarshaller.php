<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class Web3AgreementNotifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var Web3AgreementNotifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new Web3AgreementNotifyResponseUnMarshaller();
    }

    /**
     * @return Web3AgreementNotifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return Web3AgreementNotifyResponse
     */
    protected function getResponseInstance()
    {
        return new Web3AgreementNotifyResponse();
    }
}

Web3AgreementNotifyResponseUnMarshaller::__init();
