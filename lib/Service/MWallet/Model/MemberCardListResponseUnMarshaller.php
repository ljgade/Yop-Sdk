<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MemberCardListResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MemberCardListResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MemberCardListResponseUnMarshaller();
    }

    /**
     * @return MemberCardListResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MemberCardListResponse
     */
    protected function getResponseInstance()
    {
        return new MemberCardListResponse();
    }
}

MemberCardListResponseUnMarshaller::__init();
