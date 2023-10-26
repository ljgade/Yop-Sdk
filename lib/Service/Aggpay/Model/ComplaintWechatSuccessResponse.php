<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatSuccessResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ComplaintWechatSuccessBaseResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatSuccessBaseResponseDTOResult';
    }

    /**
     * @param ComplaintWechatSuccessBaseResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ComplaintWechatSuccessBaseResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
