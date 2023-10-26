<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CouponListQueryWeb3ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CouponListQueryWeb3ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CouponListQueryWeb3ResponseUnMarshaller();
    }

    /**
     * @return CouponListQueryWeb3ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CouponListQueryWeb3Response
     */
    protected function getResponseInstance()
    {
        return new CouponListQueryWeb3Response();
    }
}

CouponListQueryWeb3ResponseUnMarshaller::__init();
