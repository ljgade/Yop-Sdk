<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class IndividualQueryProgressResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var IndividualQueryProgressResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new IndividualQueryProgressResponseUnMarshaller();
    }

    /**
     * @return IndividualQueryProgressResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return IndividualQueryProgressResponse
     */
    protected function getResponseInstance()
    {
        return new IndividualQueryProgressResponse();
    }
}

IndividualQueryProgressResponseUnMarshaller::__init();
