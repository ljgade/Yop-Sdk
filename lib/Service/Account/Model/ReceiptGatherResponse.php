<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ReceiptGatherResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ReceiptGatherBatchReceiptRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ReceiptGatherBatchReceiptRespDTOResult';
    }

    /**
     * @param ReceiptGatherBatchReceiptRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReceiptGatherBatchReceiptRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
