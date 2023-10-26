<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AccountFaceCertifyOpenResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AccountFaceCertifyOpenResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountFaceCertifyOpenResponseUnMarshaller();
    }

    /**
     * @return AccountFaceCertifyOpenResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AccountFaceCertifyOpenResponse
     */
    protected function getResponseInstance()
    {
        return new AccountFaceCertifyOpenResponse();
    }
}

AccountFaceCertifyOpenResponseUnMarshaller::__init();
