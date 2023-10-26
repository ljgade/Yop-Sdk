<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeQueryRechargeQueryApiRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeQueryRechargeQueryApiRespDTOResult';
    }

    /**
     * @param RechargeQueryRechargeQueryApiRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeQueryRechargeQueryApiRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
