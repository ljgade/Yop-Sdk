<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountIndividualQueryProgressResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountIndividualQueryProgressResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountIndividualQueryProgressResponseUnMarshaller();
    }

    /**
     * @return AccountIndividualQueryProgressResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountIndividualQueryProgressResponse
     */
    protected function getResponseInstance()
    {
        return new AccountIndividualQueryProgressResponse();
    }
}

AccountIndividualQueryProgressResponseUnMarshaller::__init();
