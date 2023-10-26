<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterSaasWebIndexV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterSaasWebIndexV2CreateNetInUrlRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterSaasWebIndexV2CreateNetInUrlRespDTOResult';
    }

    /**
     * @param RegisterSaasWebIndexV2CreateNetInUrlRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterSaasWebIndexV2CreateNetInUrlRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
