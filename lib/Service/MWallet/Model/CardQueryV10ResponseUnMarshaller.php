<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CardQueryV10ResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CardQueryV10ResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CardQueryV10ResponseUnMarshaller();
    }

    /**
     * @return CardQueryV10ResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CardQueryV10Response
     */
    protected function getResponseInstance()
    {
        return new CardQueryV10Response();
    }
}

CardQueryV10ResponseUnMarshaller::__init();
