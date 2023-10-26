<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class ZzdfOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ZzdfOrderRechargeAndPayRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\ZzdfOrderRechargeAndPayRspDTOResult';
    }

    /**
     * @param ZzdfOrderRechargeAndPayRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ZzdfOrderRechargeAndPayRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
