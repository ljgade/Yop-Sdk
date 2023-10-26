<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShareTokenMarketQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShareTokenMarketQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShareTokenMarketQueryResponseUnMarshaller();
    }

    /**
     * @return ShareTokenMarketQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShareTokenMarketQueryResponse
     */
    protected function getResponseInstance()
    {
        return new ShareTokenMarketQueryResponse();
    }
}

ShareTokenMarketQueryResponseUnMarshaller::__init();
