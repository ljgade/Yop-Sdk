<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


class GetPosInfoDtosResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var GetPosInfoDtosPosInfoResponseParamResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Pos\Model\GetPosInfoDtosPosInfoResponseParamResult';
    }

    /**
     * @param GetPosInfoDtosPosInfoResponseParamResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return GetPosInfoDtosPosInfoResponseParamResult
     */
    function getResult()
    {
        return $this->result;
    }
}
