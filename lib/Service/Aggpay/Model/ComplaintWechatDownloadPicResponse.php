<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatDownloadPicResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ComplaintWechatDownloadPicWechatComplaintDownloadPicResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatDownloadPicWechatComplaintDownloadPicResponseDTOResult';
    }

    /**
     * @param ComplaintWechatDownloadPicWechatComplaintDownloadPicResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ComplaintWechatDownloadPicWechatComplaintDownloadPicResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
