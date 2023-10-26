<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class SubscribeExpireNotifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var SubscribeExpireNotifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new SubscribeExpireNotifyResponseUnMarshaller();
    }

    /**
     * @return SubscribeExpireNotifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return SubscribeExpireNotifyResponse
     */
    protected function getResponseInstance()
    {
        return new SubscribeExpireNotifyResponse();
    }
}

SubscribeExpireNotifyResponseUnMarshaller::__init();
