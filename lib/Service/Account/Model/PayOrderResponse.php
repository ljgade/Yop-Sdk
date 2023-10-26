<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PayOrderRemitRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\PayOrderRemitRespDTOResult';
    }

    /**
     * @param PayOrderRemitRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayOrderRemitRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
