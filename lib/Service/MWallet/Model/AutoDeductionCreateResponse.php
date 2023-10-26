<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AutoDeductionCreateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AutoDeductionResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoDeductionResponseDTO';
    }

    /**
     * @param AutoDeductionResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoDeductionResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
