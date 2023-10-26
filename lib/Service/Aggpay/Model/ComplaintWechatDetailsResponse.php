<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatDetailsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ComplaintWechatDetailsWechatComplaintInfoFlatResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatDetailsWechatComplaintInfoFlatResponseDTOResult';
    }

    /**
     * @param ComplaintWechatDetailsWechatComplaintInfoFlatResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ComplaintWechatDetailsWechatComplaintInfoFlatResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
