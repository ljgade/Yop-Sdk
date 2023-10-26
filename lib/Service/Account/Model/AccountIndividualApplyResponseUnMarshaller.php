<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountIndividualApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountIndividualApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountIndividualApplyResponseUnMarshaller();
    }

    /**
     * @return AccountIndividualApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountIndividualApplyResponse
     */
    protected function getResponseInstance()
    {
        return new AccountIndividualApplyResponse();
    }
}

AccountIndividualApplyResponseUnMarshaller::__init();
