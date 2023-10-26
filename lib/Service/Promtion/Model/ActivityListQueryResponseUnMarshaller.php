<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ActivityListQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ActivityListQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ActivityListQueryResponseUnMarshaller();
    }

    /**
     * @return ActivityListQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ActivityListQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ActivityListQueryResponse();
    }
}

ActivityListQueryResponseUnMarshaller::__init();
