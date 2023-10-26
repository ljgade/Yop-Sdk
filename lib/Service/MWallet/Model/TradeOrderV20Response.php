<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class TradeOrderV20Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var APIWalletPayResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\APIWalletPayResponseDTO';
    }

    /**
     * @param APIWalletPayResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return APIWalletPayResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
