<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpdateShopResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpdateShopResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpdateShopResponseUnMarshaller();
    }

    /**
     * @return UpdateShopResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpdateShopResponse
     */
    protected function getResponseInstance()
    {
        return new UpdateShopResponse();
    }
}

UpdateShopResponseUnMarshaller::__init();
