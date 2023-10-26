<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferB2bQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TransferB2bQueryMgTransferOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bQueryMgTransferOrderQueryRespDTOResult';
    }

    /**
     * @param TransferB2bQueryMgTransferOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferB2bQueryMgTransferOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
