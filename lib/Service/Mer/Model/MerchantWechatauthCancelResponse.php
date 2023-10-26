<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantWechatauthCancelResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantWechatauthCancelApplymentCancelRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthCancelApplymentCancelRespDtoResult';
    }

    /**
     * @param MerchantWechatauthCancelApplymentCancelRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantWechatauthCancelApplymentCancelRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
