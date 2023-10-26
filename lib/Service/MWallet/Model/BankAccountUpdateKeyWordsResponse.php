<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountUpdateKeyWordsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankKeyWordsResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankKeyWordsResponseDTO';
    }

    /**
     * @param BankKeyWordsResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankKeyWordsResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
