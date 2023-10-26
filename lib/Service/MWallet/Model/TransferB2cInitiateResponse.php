<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class TransferB2cInitiateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WalletTransferB2CResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletTransferB2CResponseDTO';
    }

    /**
     * @param WalletTransferB2CResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WalletTransferB2CResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
