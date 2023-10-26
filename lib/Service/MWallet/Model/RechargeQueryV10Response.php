<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class RechargeQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryRechargeResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryRechargeResponseDTO';
    }

    /**
     * @param QueryRechargeResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryRechargeResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
