<?php


namespace Yeepay\Yop\Sdk\Service\AtVcc\Model;


class UnionPayOrderQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UnionPayOrderQueryAuthReportQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\AtVcc\Model\UnionPayOrderQueryAuthReportQueryResponseDTOResult';
    }

    /**
     * @param UnionPayOrderQueryAuthReportQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UnionPayOrderQueryAuthReportQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
