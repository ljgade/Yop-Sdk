<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseAutoPaymentQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult';
    }

    /**
     * @param EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseAutoPaymentQueryAutoPaymentQueryRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
