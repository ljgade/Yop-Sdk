<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class WalletCancelV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MemberCancelResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberCancelResponseDTO';
    }

    /**
     * @param MemberCancelResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MemberCancelResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
