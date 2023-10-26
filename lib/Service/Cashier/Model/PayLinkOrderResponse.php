<?php


namespace Yeepay\Yop\Sdk\Service\Cashier\Model;


class PayLinkOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PayLinkOrderAggregationPayLinkResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cashier\Model\PayLinkOrderAggregationPayLinkResponseDTOResult';
    }

    /**
     * @param PayLinkOrderAggregationPayLinkResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayLinkOrderAggregationPayLinkResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
