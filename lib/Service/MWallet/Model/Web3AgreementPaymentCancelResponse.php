<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class Web3AgreementPaymentCancelResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FreeSecretCancelRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretCancelRespDTO';
    }

    /**
     * @param FreeSecretCancelRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FreeSecretCancelRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
