<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class PrePayResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PrePayOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\PrePayOrderResponseDTOResult';
    }

    /**
     * @param PrePayOrderResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PrePayOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
