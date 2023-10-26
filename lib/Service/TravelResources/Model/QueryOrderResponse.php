<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


class QueryOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryCinemaOrderResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryCinemaOrderResponseDTO';
    }

    /**
     * @param QueryCinemaOrderResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryCinemaOrderResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
