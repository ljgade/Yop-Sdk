<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillQueryDetailResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillQueryDetailResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillQueryDetailResponseUnMarshaller();
    }

    /**
     * @return BillQueryDetailResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillQueryDetailResponse
     */
    protected function getResponseInstance()
    {
        return new BillQueryDetailResponse();
    }
}

BillQueryDetailResponseUnMarshaller::__init();
