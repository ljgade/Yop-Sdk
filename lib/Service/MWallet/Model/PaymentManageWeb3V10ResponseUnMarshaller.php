<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PaymentManageWeb3V10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PaymentManageWeb3V10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PaymentManageWeb3V10ResponseUnMarshaller();
    }

    /**
     * @return PaymentManageWeb3V10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PaymentManageWeb3V10Response
     */
    protected function getResponseInstance()
    {
        return new PaymentManageWeb3V10Response();
    }
}

PaymentManageWeb3V10ResponseUnMarshaller::__init();
