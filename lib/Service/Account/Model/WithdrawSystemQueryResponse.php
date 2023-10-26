<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawSystemQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult';
    }

    /**
     * @param WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawSystemQueryMGWithdrawOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
