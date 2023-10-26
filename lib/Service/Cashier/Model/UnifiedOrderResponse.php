<?php


namespace Yeepay\Yop\Sdk\Service\Cashier\Model;


class UnifiedOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UnifiedOrderUnifiedCashierOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cashier\Model\UnifiedOrderUnifiedCashierOrderResponseDTOResult';
    }

    /**
     * @param UnifiedOrderUnifiedCashierOrderResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UnifiedOrderUnifiedCashierOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
