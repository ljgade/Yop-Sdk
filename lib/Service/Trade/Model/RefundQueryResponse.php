<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RefundQueryQueryRefundResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\RefundQueryQueryRefundResponseDTOResult';
    }

    /**
     * @param RefundQueryQueryRefundResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundQueryQueryRefundResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
