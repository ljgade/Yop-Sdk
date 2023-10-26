<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoDeductionCreateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoDeductionCreateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoDeductionCreateResponseUnMarshaller();
    }

    /**
     * @return AutoDeductionCreateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoDeductionCreateResponse
     */
    protected function getResponseInstance()
    {
        return new AutoDeductionCreateResponse();
    }
}

AutoDeductionCreateResponseUnMarshaller::__init();
