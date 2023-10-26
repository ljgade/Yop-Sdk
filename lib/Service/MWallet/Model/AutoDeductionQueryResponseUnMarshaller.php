<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoDeductionQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoDeductionQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoDeductionQueryResponseUnMarshaller();
    }

    /**
     * @return AutoDeductionQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoDeductionQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AutoDeductionQueryResponse();
    }
}

AutoDeductionQueryResponseUnMarshaller::__init();
