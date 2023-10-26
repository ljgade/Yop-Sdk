<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatSuccessResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatSuccessResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatSuccessResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatSuccessResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatSuccessResponse
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatSuccessResponse();
    }
}

ComplaintWechatSuccessResponseUnMarshaller::__init();
