<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class OrderQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OrderQueryYopQueryOrderResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\OrderQueryYopQueryOrderResDTOResult';
    }

    /**
     * @param OrderQueryYopQueryOrderResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderQueryYopQueryOrderResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
