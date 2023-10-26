<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RightsQueryRightsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RightsQueryRightsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RightsQueryRightsResponseUnMarshaller();
    }

    /**
     * @return RightsQueryRightsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RightsQueryRightsResponse
     */
    protected function getResponseInstance()
    {
        return new RightsQueryRightsResponse();
    }
}

RightsQueryRightsResponseUnMarshaller::__init();
