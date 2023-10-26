<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillQueryOverviewResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillQueryOverviewResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillQueryOverviewResponseUnMarshaller();
    }

    /**
     * @return BillQueryOverviewResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillQueryOverviewResponse
     */
    protected function getResponseInstance()
    {
        return new BillQueryOverviewResponse();
    }
}

BillQueryOverviewResponseUnMarshaller::__init();
