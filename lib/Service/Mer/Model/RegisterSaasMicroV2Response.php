<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterSaasMicroV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterSaasMicroV2ContributeMicroMerchantNetInRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasMicroV2ContributeMicroMerchantNetInRespDtoResult';
    }

    /**
     * @param RegisterSaasMicroV2ContributeMicroMerchantNetInRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterSaasMicroV2ContributeMicroMerchantNetInRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
