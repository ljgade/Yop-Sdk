<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ShareTokenGenerateResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ShareTokenGenerateResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShareTokenGenerateResponseUnMarshaller();
    }

    /**
     * @return ShareTokenGenerateResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ShareTokenGenerateResponse
     */
    protected function getResponseInstance()
    {
        return new ShareTokenGenerateResponse();
    }
}

ShareTokenGenerateResponseUnMarshaller::__init();
