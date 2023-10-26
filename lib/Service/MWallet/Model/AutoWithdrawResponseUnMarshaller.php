<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AutoWithdrawResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AutoWithdrawResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AutoWithdrawResponseUnMarshaller();
    }

    /**
     * @return AutoWithdrawResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AutoWithdrawResponse
     */
    protected function getResponseInstance()
    {
        return new AutoWithdrawResponse();
    }
}

AutoWithdrawResponseUnMarshaller::__init();
