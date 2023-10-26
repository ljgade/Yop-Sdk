<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountQueryWithdrawResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryBankAccountWithDrawRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBankAccountWithDrawRespDTO';
    }

    /**
     * @param QueryBankAccountWithDrawRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryBankAccountWithDrawRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
