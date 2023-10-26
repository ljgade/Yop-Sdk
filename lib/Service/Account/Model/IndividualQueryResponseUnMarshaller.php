<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class IndividualQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var IndividualQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new IndividualQueryResponseUnMarshaller();
    }

    /**
     * @return IndividualQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return IndividualQueryResponse
     */
    protected function getResponseInstance()
    {
        return new IndividualQueryResponse();
    }
}

IndividualQueryResponseUnMarshaller::__init();
