<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeAutoDeductionCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeAutoDeductionCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeAutoDeductionCreateResponseUnMarshaller();
    }

    /**
     * @return TradeAutoDeductionCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeAutoDeductionCreateResponse
     */
    protected function getResponseInstance()
    {
        return new TradeAutoDeductionCreateResponse();
    }
}

TradeAutoDeductionCreateResponseUnMarshaller::__init();
