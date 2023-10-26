<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AgreementPaymentQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FreeSecretQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretQueryResponseDTO';
    }

    /**
     * @param FreeSecretQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FreeSecretQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
