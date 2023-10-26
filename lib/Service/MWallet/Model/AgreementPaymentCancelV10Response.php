<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AgreementPaymentCancelV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FreeSecretCancelResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretCancelResponseDTO';
    }

    /**
     * @param FreeSecretCancelResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FreeSecretCancelResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
