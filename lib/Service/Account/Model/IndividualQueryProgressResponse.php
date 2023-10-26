<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class IndividualQueryProgressResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyIndivdualProgressRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndivdualProgressRespDTO';
    }

    /**
     * @param ApplyIndivdualProgressRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyIndivdualProgressRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
