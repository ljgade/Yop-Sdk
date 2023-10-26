<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ManageFeeQueryDeductResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ManageFeeQueryDeductResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ManageFeeQueryDeductResponseUnMarshaller();
    }

    /**
     * @return ManageFeeQueryDeductResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ManageFeeQueryDeductResponse
     */
    protected function getResponseInstance()
    {
        return new ManageFeeQueryDeductResponse();
    }
}

ManageFeeQueryDeductResponseUnMarshaller::__init();
