<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ExternalOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ExternalOrderExternalOrderSubmitOrderRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ExternalOrderExternalOrderSubmitOrderRespDtoResult';
    }

    /**
     * @param ExternalOrderExternalOrderSubmitOrderRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ExternalOrderExternalOrderSubmitOrderRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
