<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class PointQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PointQueryPointAccountQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\PointQueryPointAccountQueryResponseDTOResult';
    }

    /**
     * @param PointQueryPointAccountQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PointQueryPointAccountQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
