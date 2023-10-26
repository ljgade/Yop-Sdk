<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class Web3PaymentManageResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var Web3PaymentManageResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new Web3PaymentManageResponseUnMarshaller();
    }

    /**
     * @return Web3PaymentManageResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return Web3PaymentManageResponse
     */
    protected function getResponseInstance()
    {
        return new Web3PaymentManageResponse();
    }
}

Web3PaymentManageResponseUnMarshaller::__init();
