<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AccountQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WalletMemberResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletMemberResponseDTO';
    }

    /**
     * @param WalletMemberResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WalletMemberResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
