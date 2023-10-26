<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class PasswordManageV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var PasswordManageV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new PasswordManageV10ResponseUnMarshaller();
    }

    /**
     * @return PasswordManageV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return PasswordManageV10Response
     */
    protected function getResponseInstance()
    {
        return new PasswordManageV10Response();
    }
}

PasswordManageV10ResponseUnMarshaller::__init();
