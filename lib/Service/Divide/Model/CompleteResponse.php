<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class CompleteResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CompleteYopOrderEndDivideResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\CompleteYopOrderEndDivideResDTOResult';
    }

    /**
     * @param CompleteYopOrderEndDivideResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompleteYopOrderEndDivideResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
