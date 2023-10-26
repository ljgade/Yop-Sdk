<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AutoWithdrawResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AutoWithdrawResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\AutoWithdrawResponseDTO';
    }

    /**
     * @param AutoWithdrawResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoWithdrawResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
