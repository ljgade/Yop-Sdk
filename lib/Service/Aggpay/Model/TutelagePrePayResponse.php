<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class TutelagePrePayResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TutelagePrePayWrapPrePayOrderResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\TutelagePrePayWrapPrePayOrderResponseDTOResult';
    }

    /**
     * @param TutelagePrePayWrapPrePayOrderResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TutelagePrePayWrapPrePayOrderResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
