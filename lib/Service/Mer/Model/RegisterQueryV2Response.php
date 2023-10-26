<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterQueryV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RegisterQueryV2NetInProgressQueryRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\RegisterQueryV2NetInProgressQueryRespDtoResult';
    }

    /**
     * @param RegisterQueryV2NetInProgressQueryRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RegisterQueryV2NetInProgressQueryRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
