<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class ComplaintWechatDownloadPicResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var ComplaintWechatDownloadPicResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatDownloadPicResponseUnMarshaller();
    }

    /**
     * @return ComplaintWechatDownloadPicResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return ComplaintWechatDownloadPicResponse
     */
    protected function getResponseInstance()
    {
        return new ComplaintWechatDownloadPicResponse();
    }
}

ComplaintWechatDownloadPicResponseUnMarshaller::__init();
