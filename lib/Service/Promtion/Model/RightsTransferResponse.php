<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class RightsTransferResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BaseResponse
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\BaseResponse';
    }

    /**
     * @param BaseResponse $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BaseResponse
     */
    function getResult()
    {
        return $this->result;
    }
}
