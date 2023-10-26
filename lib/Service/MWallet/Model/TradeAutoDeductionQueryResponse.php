<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class TradeAutoDeductionQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AutoDeductionQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoDeductionQueryResponseDTO';
    }

    /**
     * @param AutoDeductionQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoDeductionQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
