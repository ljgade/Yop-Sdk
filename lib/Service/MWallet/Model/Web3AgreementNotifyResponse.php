<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class Web3AgreementNotifyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FreeSecretNotifyRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\FreeSecretNotifyRespDTO';
    }

    /**
     * @param FreeSecretNotifyRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FreeSecretNotifyRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
