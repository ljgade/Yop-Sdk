<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SettleWayQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SettleWayQuerySettleWayQueryYOPResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayQuerySettleWayQueryYOPResponseDtoResult';
    }

    /**
     * @param SettleWayQuerySettleWayQueryYOPResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleWayQuerySettleWayQueryYOPResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
