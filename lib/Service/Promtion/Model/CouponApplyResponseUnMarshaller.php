<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CouponApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CouponApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CouponApplyResponseUnMarshaller();
    }

    /**
     * @return CouponApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CouponApplyResponse
     */
    protected function getResponseInstance()
    {
        return new CouponApplyResponse();
    }
}

CouponApplyResponseUnMarshaller::__init();
