<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SupplierQueryProgressResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SupplierQueryProgressApplySupplierProgressRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SupplierQueryProgressApplySupplierProgressRespDTOResult';
    }

    /**
     * @param SupplierQueryProgressApplySupplierProgressRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SupplierQueryProgressApplySupplierProgressRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
