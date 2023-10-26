<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundFastResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RefundFastYopFastRefundResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\RefundFastYopFastRefundResponseDTOResult';
    }

    /**
     * @param RefundFastYopFastRefundResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundFastYopFastRefundResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
