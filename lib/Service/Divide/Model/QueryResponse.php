<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class QueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryYopQueryOrderDivideResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\QueryYopQueryOrderDivideResDTOResult';
    }

    /**
     * @param QueryYopQueryOrderDivideResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryYopQueryOrderDivideResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
