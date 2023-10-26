<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class OperateShopResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var OperateShopResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OperateShopResponseUnMarshaller();
    }

    /**
     * @return OperateShopResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return OperateShopResponse
     */
    protected function getResponseInstance()
    {
        return new OperateShopResponse();
    }
}

OperateShopResponseUnMarshaller::__init();
