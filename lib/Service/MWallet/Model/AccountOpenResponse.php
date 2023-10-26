<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AccountOpenResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WalletRequestRecordResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\WalletRequestRecordResponseDTO';
    }

    /**
     * @param WalletRequestRecordResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WalletRequestRecordResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
