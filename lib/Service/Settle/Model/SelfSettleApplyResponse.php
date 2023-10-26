<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SelfSettleApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SelfSettleApplySelfSettleResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SelfSettleApplySelfSettleResponseDtoResult';
    }

    /**
     * @param SelfSettleApplySelfSettleResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SelfSettleApplySelfSettleResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
