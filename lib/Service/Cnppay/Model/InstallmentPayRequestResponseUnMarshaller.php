<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InstallmentPayRequestResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InstallmentPayRequestResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InstallmentPayRequestResponseUnMarshaller();
    }

    /**
     * @return InstallmentPayRequestResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InstallmentPayRequestResponse
     */
    protected function getResponseInstance()
    {
        return new InstallmentPayRequestResponse();
    }
}

InstallmentPayRequestResponseUnMarshaller::__init();
