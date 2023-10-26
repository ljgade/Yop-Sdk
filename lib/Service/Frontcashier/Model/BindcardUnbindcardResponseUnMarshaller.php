<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardUnbindcardResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardUnbindcardResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardUnbindcardResponseUnMarshaller();
    }

    /**
     * @return BindcardUnbindcardResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardUnbindcardResponse
     */
    protected function getResponseInstance()
    {
        return new BindcardUnbindcardResponse();
    }
}

BindcardUnbindcardResponseUnMarshaller::__init();
