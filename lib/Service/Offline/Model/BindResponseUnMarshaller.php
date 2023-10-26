<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindResponseUnMarshaller();
    }

    /**
     * @return BindResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindResponse
     */
    protected function getResponseInstance()
    {
        return new BindResponse();
    }
}

BindResponseUnMarshaller::__init();
