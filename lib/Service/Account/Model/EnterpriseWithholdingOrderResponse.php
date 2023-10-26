<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseWithholdingOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult';
    }

    /**
     * @param EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseWithholdingOrderWithholdingPaymentRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
