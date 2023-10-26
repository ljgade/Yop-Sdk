<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundSupplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RefundSupplyYopSupplyCardInfoRefundResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\RefundSupplyYopSupplyCardInfoRefundResponseDTOResult';
    }

    /**
     * @param RefundSupplyYopSupplyCardInfoRefundResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundSupplyYopSupplyCardInfoRefundResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
