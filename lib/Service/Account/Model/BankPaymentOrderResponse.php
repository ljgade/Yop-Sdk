<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankPaymentOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankPaymentOrderBankAccountPaymentRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\BankPaymentOrderBankAccountPaymentRespDtoResult';
    }

    /**
     * @param BankPaymentOrderBankAccountPaymentRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankPaymentOrderBankAccountPaymentRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
