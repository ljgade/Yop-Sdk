<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class Web3CouponListQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var Web3CouponListQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new Web3CouponListQueryResponseUnMarshaller();
    }

    /**
     * @return Web3CouponListQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return Web3CouponListQueryResponse
     */
    protected function getResponseInstance()
    {
        return new Web3CouponListQueryResponse();
    }
}

Web3CouponListQueryResponseUnMarshaller::__init();
