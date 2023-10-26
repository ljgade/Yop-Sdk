<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class RightsTransferResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var RightsTransferResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RightsTransferResponseUnMarshaller();
    }

    /**
     * @return RightsTransferResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return RightsTransferResponse
     */
    protected function getResponseInstance()
    {
        return new RightsTransferResponse();
    }
}

RightsTransferResponseUnMarshaller::__init();
