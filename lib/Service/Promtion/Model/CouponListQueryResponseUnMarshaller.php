<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CouponListQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CouponListQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CouponListQueryResponseUnMarshaller();
    }

    /**
     * @return CouponListQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CouponListQueryResponse
     */
    protected function getResponseInstance()
    {
        return new CouponListQueryResponse();
    }
}

CouponListQueryResponseUnMarshaller::__init();
