<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BackResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BackYopDivideBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\BackYopDivideBackResDTOResult';
    }

    /**
     * @param BackYopDivideBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BackYopDivideBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
