<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeAccountBookQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeAccountBookQueryRechargePageQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeAccountBookQueryRechargePageQueryResponseDTOResult';
    }

    /**
     * @param RechargeAccountBookQueryRechargePageQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeAccountBookQueryRechargePageQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
