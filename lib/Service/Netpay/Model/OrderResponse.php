<?php


namespace Yeepay\Yop\Sdk\Service\Netpay\Model;


class OrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OrderOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Netpay\Model\OrderOrderResponseDTOResult';
    }

    /**
     * @param OrderOrderResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
