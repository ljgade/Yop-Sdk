<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SupplierApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SupplierApplyApplySupplierRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SupplierApplyApplySupplierRespDTOResult';
    }

    /**
     * @param SupplierApplyApplySupplierRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierApplyApplySupplierRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
