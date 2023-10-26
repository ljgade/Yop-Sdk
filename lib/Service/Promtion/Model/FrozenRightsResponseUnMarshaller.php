<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class FrozenRightsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var FrozenRightsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new FrozenRightsResponseUnMarshaller();
    }

    /**
     * @return FrozenRightsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return FrozenRightsResponse
     */
    protected function getResponseInstance()
    {
        return new FrozenRightsResponse();
    }
}

FrozenRightsResponseUnMarshaller::__init();
