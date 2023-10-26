<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class ManageFeeQueryDeductResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ManageFeeDeductQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\ManageFeeDeductQueryRespDTO';
    }

    /**
     * @param ManageFeeDeductQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ManageFeeDeductQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
