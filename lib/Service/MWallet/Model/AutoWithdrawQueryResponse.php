<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AutoWithdrawQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AutoWithdrawQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawQueryResponseDTO';
    }

    /**
     * @param AutoWithdrawQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoWithdrawQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
