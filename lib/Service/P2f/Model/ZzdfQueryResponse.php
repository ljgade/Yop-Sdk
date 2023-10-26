<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class ZzdfQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ZzdfQueryQueryRechargeAndPayRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\ZzdfQueryQueryRechargeAndPayRspDTOResult';
    }

    /**
     * @param ZzdfQueryQueryRechargeAndPayRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ZzdfQueryQueryRechargeAndPayRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
