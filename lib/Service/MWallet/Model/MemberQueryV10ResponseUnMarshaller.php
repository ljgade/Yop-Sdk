<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class MemberQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var MemberQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new MemberQueryV10ResponseUnMarshaller();
    }

    /**
     * @return MemberQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return MemberQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new MemberQueryV10Response();
    }
}

MemberQueryV10ResponseUnMarshaller::__init();
