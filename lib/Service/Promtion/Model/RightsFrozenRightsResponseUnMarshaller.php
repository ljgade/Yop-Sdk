<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RightsFrozenRightsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RightsFrozenRightsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RightsFrozenRightsResponseUnMarshaller();
    }

    /**
     * @return RightsFrozenRightsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RightsFrozenRightsResponse
     */
    protected function getResponseInstance()
    {
        return new RightsFrozenRightsResponse();
    }
}

RightsFrozenRightsResponseUnMarshaller::__init();
