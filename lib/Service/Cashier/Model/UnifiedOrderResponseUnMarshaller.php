<?php


namespace Yeepay\Yop\Sdk\Service\Cashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnifiedOrderResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnifiedOrderResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnifiedOrderResponseUnMarshaller();
    }

    /**
     * @return UnifiedOrderResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnifiedOrderResponse
     */
    protected function getResponseInstance()
    {
        return new UnifiedOrderResponse();
    }
}

UnifiedOrderResponseUnMarshaller::__init();
