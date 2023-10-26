<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferSystemQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TransferSystemQueryMgTransferOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferSystemQueryMgTransferOrderQueryRespDTOResult';
    }

    /**
     * @param TransferSystemQueryMgTransferOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferSystemQueryMgTransferOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
