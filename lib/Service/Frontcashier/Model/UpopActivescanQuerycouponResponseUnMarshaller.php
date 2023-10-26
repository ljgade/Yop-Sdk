<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UpopActivescanQuerycouponResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UpopActivescanQuerycouponResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopActivescanQuerycouponResponseUnMarshaller();
    }

    /**
     * @return UpopActivescanQuerycouponResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UpopActivescanQuerycouponResponse
     */
    protected function getResponseInstance()
    {
        return new UpopActivescanQuerycouponResponse();
    }
}

UpopActivescanQuerycouponResponseUnMarshaller::__init();
