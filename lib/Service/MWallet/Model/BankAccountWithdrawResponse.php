<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountWithdrawResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankAccountWithDrawRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountWithDrawRespDTO';
    }

    /**
     * @param BankAccountWithDrawRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountWithDrawRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
