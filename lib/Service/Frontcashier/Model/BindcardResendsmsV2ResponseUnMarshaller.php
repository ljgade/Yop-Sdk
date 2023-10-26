<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class BindcardResendsmsV2ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var BindcardResendsmsV2ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new BindcardResendsmsV2ResponseUnMarshaller();
    }

    /**
     * @return BindcardResendsmsV2ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return BindcardResendsmsV2Response
     */
    protected function getResponseInstance()
    {
        return new BindcardResendsmsV2Response();
    }
}

BindcardResendsmsV2ResponseUnMarshaller::__init();
