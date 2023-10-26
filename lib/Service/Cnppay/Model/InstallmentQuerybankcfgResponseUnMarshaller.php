<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class InstallmentQuerybankcfgResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var InstallmentQuerybankcfgResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new InstallmentQuerybankcfgResponseUnMarshaller();
    }

    /**
     * @return InstallmentQuerybankcfgResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return InstallmentQuerybankcfgResponse
     */
    protected function getResponseInstance()
    {
        return new InstallmentQuerybankcfgResponse();
    }
}

InstallmentQuerybankcfgResponseUnMarshaller::__init();
