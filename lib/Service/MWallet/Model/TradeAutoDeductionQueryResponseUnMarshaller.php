<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class TradeAutoDeductionQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var TradeAutoDeductionQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new TradeAutoDeductionQueryResponseUnMarshaller();
    }

    /**
     * @return TradeAutoDeductionQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return TradeAutoDeductionQueryResponse
     */
    protected function getResponseInstance()
    {
        return new TradeAutoDeductionQueryResponse();
    }
}

TradeAutoDeductionQueryResponseUnMarshaller::__init();
