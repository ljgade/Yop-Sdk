<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;


class CreateOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OrderBaseResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\TravelResources\Model\OrderBaseResponseDTO';
    }

    /**
     * @param OrderBaseResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderBaseResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
