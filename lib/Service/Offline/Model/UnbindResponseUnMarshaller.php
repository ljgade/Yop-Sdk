<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnbindResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnbindResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnbindResponseUnMarshaller();
    }

    /**
     * @return UnbindResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnbindResponse
     */
    protected function getResponseInstance()
    {
        return new UnbindResponse();
    }
}

UnbindResponseUnMarshaller::__init();
