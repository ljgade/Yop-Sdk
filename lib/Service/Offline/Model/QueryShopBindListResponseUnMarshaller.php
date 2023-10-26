<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class QueryShopBindListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var QueryShopBindListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new QueryShopBindListResponseUnMarshaller();
    }

    /**
     * @return QueryShopBindListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return QueryShopBindListResponse
     */
    protected function getResponseInstance()
    {
        return new QueryShopBindListResponse();
    }
}

QueryShopBindListResponseUnMarshaller::__init();
