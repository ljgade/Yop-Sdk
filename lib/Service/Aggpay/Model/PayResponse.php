<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class PayResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PayPassiveOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\PayPassiveOrderResponseDTOResult';
    }

    /**
     * @param PayPassiveOrderResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayPassiveOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
