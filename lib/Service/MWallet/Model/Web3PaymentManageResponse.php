<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class Web3PaymentManageResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WalletAdapterRequestURLResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletAdapterRequestURLResponseDTO';
    }

    /**
     * @param WalletAdapterRequestURLResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WalletAdapterRequestURLResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
