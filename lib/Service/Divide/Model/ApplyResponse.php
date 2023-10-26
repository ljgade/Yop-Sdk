<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class ApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyYopOrderDivideResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\ApplyYopOrderDivideResDTOResult';
    }

    /**
     * @param ApplyYopOrderDivideResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyYopOrderDivideResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
