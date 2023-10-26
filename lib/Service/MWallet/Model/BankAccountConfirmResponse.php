<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountConfirmResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ConfirmBankAccountResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\ConfirmBankAccountResponseDTO';
    }

    /**
     * @param ConfirmBankAccountResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ConfirmBankAccountResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
