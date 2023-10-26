<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class QueryUseridResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryUseridPassiveGetUserIdResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\QueryUseridPassiveGetUserIdResponseDTOResult';
    }

    /**
     * @param QueryUseridPassiveGetUserIdResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryUseridPassiveGetUserIdResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
