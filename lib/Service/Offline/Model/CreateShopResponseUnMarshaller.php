<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreateShopResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreateShopResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreateShopResponseUnMarshaller();
    }

    /**
     * @return CreateShopResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreateShopResponse
     */
    protected function getResponseInstance()
    {
        return new CreateShopResponse();
    }
}

CreateShopResponseUnMarshaller::__init();
