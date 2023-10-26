<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RightsQueryConsumeRecordsResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RightsQueryConsumeRecordsResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RightsQueryConsumeRecordsResponseUnMarshaller();
    }

    /**
     * @return RightsQueryConsumeRecordsResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RightsQueryConsumeRecordsResponse
     */
    protected function getResponseInstance()
    {
        return new RightsQueryConsumeRecordsResponse();
    }
}

RightsQueryConsumeRecordsResponseUnMarshaller::__init();
