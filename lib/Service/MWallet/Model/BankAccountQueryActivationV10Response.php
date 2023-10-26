<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountQueryActivationV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryBankAccountActivationRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryBankAccountActivationRespDTO';
    }

    /**
     * @param QueryBankAccountActivationRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryBankAccountActivationRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
