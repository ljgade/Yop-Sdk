<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class OrderCloseResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OrderCloseResponseOrderCloseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\OrderCloseResponseOrderCloseDTOResult';
    }

    /**
     * @param OrderCloseResponseOrderCloseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OrderCloseResponseOrderCloseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
