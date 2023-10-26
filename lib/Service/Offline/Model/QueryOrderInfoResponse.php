<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class QueryOrderInfoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryOrderInfoRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryOrderInfoRespDTO';
    }

    /**
     * @param YopQueryOrderInfoRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryOrderInfoRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
