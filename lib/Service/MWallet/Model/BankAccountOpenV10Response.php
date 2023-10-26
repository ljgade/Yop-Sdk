<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountOpenV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankAccountResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankAccountResponseDTO';
    }

    /**
     * @param BankAccountResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankAccountResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
