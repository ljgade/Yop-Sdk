<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountQueryTradeResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryBankAccountTradeRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBankAccountTradeRespDTO';
    }

    /**
     * @param QueryBankAccountTradeRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryBankAccountTradeRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
