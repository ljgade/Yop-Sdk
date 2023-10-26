<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class ActivityListQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ActivityListQueryActivityPageListQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\ActivityListQueryActivityPageListQueryResponseResult';
    }

    /**
     * @param ActivityListQueryActivityPageListQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ActivityListQueryActivityPageListQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
