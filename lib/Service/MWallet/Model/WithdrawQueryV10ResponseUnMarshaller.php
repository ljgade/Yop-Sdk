<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class WithdrawQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var WithdrawQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new WithdrawQueryV10ResponseUnMarshaller();
    }

    /**
     * @return WithdrawQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return WithdrawQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new WithdrawQueryV10Response();
    }
}

WithdrawQueryV10ResponseUnMarshaller::__init();
