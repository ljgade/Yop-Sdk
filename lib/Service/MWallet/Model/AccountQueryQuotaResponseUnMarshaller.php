<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountQueryQuotaResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountQueryQuotaResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountQueryQuotaResponseUnMarshaller();
    }

    /**
     * @return AccountQueryQuotaResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountQueryQuotaResponse
     */
    protected function getResponseInstance()
    {
        return new AccountQueryQuotaResponse();
    }
}

AccountQueryQuotaResponseUnMarshaller::__init();
