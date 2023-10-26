<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountIndividualQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountIndividualQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountIndividualQueryResponseUnMarshaller();
    }

    /**
     * @return AccountIndividualQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountIndividualQueryResponse
     */
    protected function getResponseInstance()
    {
        return new AccountIndividualQueryResponse();
    }
}

AccountIndividualQueryResponseUnMarshaller::__init();
