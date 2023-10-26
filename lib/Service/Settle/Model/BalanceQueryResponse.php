<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class BalanceQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BalanceQuerySelfSettleQueryResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\BalanceQuerySelfSettleQueryResponseDtoResult';
    }

    /**
     * @param BalanceQuerySelfSettleQueryResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BalanceQuerySelfSettleQueryResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
