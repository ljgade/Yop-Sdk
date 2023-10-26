<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class ReceiptApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopSettleReceiptResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\YopSettleReceiptResponseDTO';
    }

    /**
     * @param YopSettleReceiptResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopSettleReceiptResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
