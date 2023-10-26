<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class Web3AgreementPaymentQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FreeSecretQueryRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretQueryRespDTO';
    }

    /**
     * @param FreeSecretQueryRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FreeSecretQueryRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
