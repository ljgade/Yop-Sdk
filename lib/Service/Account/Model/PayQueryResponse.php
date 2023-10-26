<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PayQueryRemitOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\PayQueryRemitOrderQueryRespDTOResult';
    }

    /**
     * @param PayQueryRemitOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayQueryRemitOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
