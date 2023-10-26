<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SettleRecodOrderQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SettleRecordOrderQueryResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleRecordOrderQueryResponseDto';
    }

    /**
     * @param SettleRecordOrderQueryResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleRecordOrderQueryResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
