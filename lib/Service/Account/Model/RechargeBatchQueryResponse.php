<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class RechargeBatchQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RechargeBatchQueryRechargeQueryMultiApiRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\RechargeBatchQueryRechargeQueryMultiApiRespDTOResult';
    }

    /**
     * @param RechargeBatchQueryRechargeQueryMultiApiRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RechargeBatchQueryRechargeQueryMultiApiRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
