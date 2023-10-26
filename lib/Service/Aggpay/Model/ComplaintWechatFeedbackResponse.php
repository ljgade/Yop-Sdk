<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatFeedbackResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ComplaintWechatFeedbackBaseResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatFeedbackBaseResponseDTOResult';
    }

    /**
     * @param ComplaintWechatFeedbackBaseResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ComplaintWechatFeedbackBaseResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
