<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class Web3AgreementPaymentSignResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FreeSecretSignRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretSignRespDTO';
    }

    /**
     * @param FreeSecretSignRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FreeSecretSignRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
