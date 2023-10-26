<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class EnterpriseTokenPayOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var EnterpriseTokenPayOrderTokenPaymentResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\EnterpriseTokenPayOrderTokenPaymentResponseDtoResult';
    }

    /**
     * @param EnterpriseTokenPayOrderTokenPaymentResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return EnterpriseTokenPayOrderTokenPaymentResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
