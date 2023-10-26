<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterSaasIndexV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterSaasIndexV2UserPreRegisterRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasIndexV2UserPreRegisterRespDtoResult';
    }

    /**
     * @param RegisterSaasIndexV2UserPreRegisterRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterSaasIndexV2UserPreRegisterRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
