<?php


namespace Yeepay\Yop\Sdk\Service\Netpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OrderSdkPayOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OrderSdkPayOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderSdkPayOrderResponseUnMarshaller();
    }

    /**
     * @return OrderSdkPayOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OrderSdkPayOrderResponse
     */
    protected function getResponseInstance()
    {
        return new OrderSdkPayOrderResponse();
    }
}

OrderSdkPayOrderResponseUnMarshaller::__init();
