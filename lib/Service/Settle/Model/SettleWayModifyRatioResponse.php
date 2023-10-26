<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SettleWayModifyRatioResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SettleWayModifyRatioModifySettleWayRatioResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleWayModifyRatioModifySettleWayRatioResponseDtoResult';
    }

    /**
     * @param SettleWayModifyRatioModifySettleWayRatioResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleWayModifyRatioModifySettleWayRatioResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
