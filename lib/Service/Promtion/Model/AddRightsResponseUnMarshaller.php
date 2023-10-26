<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class AddRightsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var AddRightsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AddRightsResponseUnMarshaller();
    }

    /**
     * @return AddRightsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return AddRightsResponse
     */
    protected function getResponseInstance()
    {
        return new AddRightsResponse();
    }
}

AddRightsResponseUnMarshaller::__init();
