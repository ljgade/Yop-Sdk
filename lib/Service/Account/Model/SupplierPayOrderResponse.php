<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SupplierPayOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SupplierPayOrderRemitRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SupplierPayOrderRemitRespDTOResult';
    }

    /**
     * @param SupplierPayOrderRemitRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierPayOrderRemitRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
