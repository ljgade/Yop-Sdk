<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoWithdrawQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoWithdrawQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoWithdrawQueryResponseUnMarshaller();
    }

    /**
     * @return AutoWithdrawQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoWithdrawQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AutoWithdrawQueryResponse();
    }
}

AutoWithdrawQueryResponseUnMarshaller::__init();
