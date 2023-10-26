<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountQueryV10ResponseUnMarshaller();
    }

    /**
     * @return AccountQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new AccountQueryV10Response();
    }
}

AccountQueryV10ResponseUnMarshaller::__init();
