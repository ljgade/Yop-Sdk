<?php


namespace Yeepay\Yop\Sdk\Service\Insurance\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RealnameNotifyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RealnameNotifyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RealnameNotifyResponseUnMarshaller();
    }

    /**
     * @return RealnameNotifyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RealnameNotifyResponse
     */
    protected function getResponseInstance()
    {
        return new RealnameNotifyResponse();
    }
}

RealnameNotifyResponseUnMarshaller::__init();
