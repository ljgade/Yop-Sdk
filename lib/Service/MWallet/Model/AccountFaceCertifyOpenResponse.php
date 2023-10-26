<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AccountFaceCertifyOpenResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WalletOpenByFaceResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletOpenByFaceResponseDTO';
    }

    /**
     * @param WalletOpenByFaceResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WalletOpenByFaceResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
