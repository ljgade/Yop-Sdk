<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class TransferB2cQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryMGB2CResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryMGB2CResponseDTO';
    }

    /**
     * @param QueryMGB2CResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryMGB2CResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
