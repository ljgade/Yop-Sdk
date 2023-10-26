<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class GetShopResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var GetShopResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new GetShopResponseUnMarshaller();
    }

    /**
     * @return GetShopResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return GetShopResponse
     */
    protected function getResponseInstance()
    {
        return new GetShopResponse();
    }
}

GetShopResponseUnMarshaller::__init();
