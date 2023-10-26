<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WithdrawOrderWithdrawOrderRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawOrderWithdrawOrderRespDTOResult';
    }

    /**
     * @param WithdrawOrderWithdrawOrderRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawOrderWithdrawOrderRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
