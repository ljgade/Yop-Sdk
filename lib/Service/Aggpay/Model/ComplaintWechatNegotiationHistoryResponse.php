<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatNegotiationHistoryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ComplaintWechatNegotiationHistoryWechatComplaintNegotiationHistoryFlatResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ComplaintWechatNegotiationHistoryWechatComplaintNegotiationHistoryFlatResponseDTOResult';
    }

    /**
     * @param ComplaintWechatNegotiationHistoryWechatComplaintNegotiationHistoryFlatResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ComplaintWechatNegotiationHistoryWechatComplaintNegotiationHistoryFlatResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
