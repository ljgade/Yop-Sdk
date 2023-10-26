<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferB2bOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TransferB2bOrderMgTransferOrderRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferB2bOrderMgTransferOrderRespDTOResult';
    }

    /**
     * @param TransferB2bOrderMgTransferOrderRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferB2bOrderMgTransferOrderRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
