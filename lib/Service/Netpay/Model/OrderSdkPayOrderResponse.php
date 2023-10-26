<?php


namespace Yeepay\Yop\Sdk\Service\Netpay\Model;


class OrderSdkPayOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OrderSdkPayOrderSdkOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Netpay\Model\OrderSdkPayOrderSdkOrderResponseDTOResult';
    }

    /**
     * @param OrderSdkPayOrderSdkOrderResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderSdkPayOrderSdkOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
