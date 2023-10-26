<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BillQueryListV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BillQueryListV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BillQueryListV2ResponseUnMarshaller();
    }

    /**
     * @return BillQueryListV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BillQueryListV2Response
     */
    protected function getResponseInstance()
    {
        return new BillQueryListV2Response();
    }
}

BillQueryListV2ResponseUnMarshaller::__init();
