<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class WithdrawQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WalletQueryWithdrawResultDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletQueryWithdrawResultDTO';
    }

    /**
     * @param WalletQueryWithdrawResultDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WalletQueryWithdrawResultDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
