<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterSaasMerchantV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterSaasMerchantV2ContributeMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMerchantV2ContributeMerchantNetInRespDtoResult';
    }

    /**
     * @param RegisterSaasMerchantV2ContributeMerchantNetInRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterSaasMerchantV2ContributeMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
