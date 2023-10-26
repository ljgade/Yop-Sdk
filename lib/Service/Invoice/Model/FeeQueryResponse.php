<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class FeeQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FeeQueryGetFeeResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\FeeQueryGetFeeResponseDtoResult';
    }

    /**
     * @param FeeQueryGetFeeResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FeeQueryGetFeeResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
