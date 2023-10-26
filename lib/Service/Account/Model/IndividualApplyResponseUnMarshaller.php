<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class IndividualApplyResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var IndividualApplyResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new IndividualApplyResponseUnMarshaller();
    }

    /**
     * @return IndividualApplyResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return IndividualApplyResponse
     */
    protected function getResponseInstance()
    {
        return new IndividualApplyResponse();
    }
}

IndividualApplyResponseUnMarshaller::__init();
