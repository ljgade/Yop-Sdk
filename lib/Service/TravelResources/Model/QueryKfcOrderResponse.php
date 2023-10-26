<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


class QueryKfcOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryKfcOrderResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryKfcOrderResponseDTO';
    }

    /**
     * @param QueryKfcOrderResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryKfcOrderResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
