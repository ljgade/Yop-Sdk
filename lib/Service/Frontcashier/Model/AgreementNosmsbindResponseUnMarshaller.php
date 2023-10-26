<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AgreementNosmsbindResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AgreementNosmsbindResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AgreementNosmsbindResponseUnMarshaller();
    }

    /**
     * @return AgreementNosmsbindResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AgreementNosmsbindResponse
     */
    protected function getResponseInstance()
    {
        return new AgreementNosmsbindResponse();
    }
}

AgreementNosmsbindResponseUnMarshaller::__init();
