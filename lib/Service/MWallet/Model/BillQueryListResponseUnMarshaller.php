<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillQueryListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillQueryListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillQueryListResponseUnMarshaller();
    }

    /**
     * @return BillQueryListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillQueryListResponse
     */
    protected function getResponseInstance()
    {
        return new BillQueryListResponse();
    }
}

BillQueryListResponseUnMarshaller::__init();
