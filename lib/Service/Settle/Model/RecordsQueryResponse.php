<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class RecordsQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RecordsQuerySettleRecordQueryResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\RecordsQuerySettleRecordQueryResponseDtoResult';
    }

    /**
     * @param RecordsQuerySettleRecordQueryResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RecordsQuerySettleRecordQueryResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
