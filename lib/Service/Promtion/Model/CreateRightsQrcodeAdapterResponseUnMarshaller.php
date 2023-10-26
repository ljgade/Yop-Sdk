<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CreateRightsQrcodeAdapterResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CreateRightsQrcodeAdapterResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CreateRightsQrcodeAdapterResponseUnMarshaller();
    }

    /**
     * @return CreateRightsQrcodeAdapterResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CreateRightsQrcodeAdapterResponse
     */
    protected function getResponseInstance()
    {
        return new CreateRightsQrcodeAdapterResponse();
    }
}

CreateRightsQrcodeAdapterResponseUnMarshaller::__init();
