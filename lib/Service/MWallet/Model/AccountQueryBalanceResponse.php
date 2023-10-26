<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AccountQueryBalanceResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountQueryBalanceQueryBalanceResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\AccountQueryBalanceQueryBalanceResponseDTOResult';
    }

    /**
     * @param AccountQueryBalanceQueryBalanceResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountQueryBalanceQueryBalanceResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
