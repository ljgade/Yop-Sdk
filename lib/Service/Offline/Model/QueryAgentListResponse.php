<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class QueryAgentListResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryAgentRspDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryAgentRspDto';
    }

    /**
     * @param YopQueryAgentRspDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryAgentRspDto
     */
    function getResult()
    {
        return $this->result;
    }
}
