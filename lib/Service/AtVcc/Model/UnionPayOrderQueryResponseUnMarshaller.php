<?php


namespace Yeepay\Yop\Sdk\Service\AtVcc\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class UnionPayOrderQueryResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var UnionPayOrderQueryResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UnionPayOrderQueryResponseUnMarshaller();
    }

    /**
     * @return UnionPayOrderQueryResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return UnionPayOrderQueryResponse
     */
    protected function getResponseInstance()
    {
        return new UnionPayOrderQueryResponse();
    }
}

UnionPayOrderQueryResponseUnMarshaller::__init();
