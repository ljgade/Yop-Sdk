<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantDisposeQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult';
    }

    /**
     * @param MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantDisposeQueryMerchantQueryDisposeNotifyRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
