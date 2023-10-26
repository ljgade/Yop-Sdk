<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayBatchOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PayBatchOrderBatchRemitRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\PayBatchOrderBatchRemitRespDTOResult';
    }

    /**
     * @param PayBatchOrderBatchRemitRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PayBatchOrderBatchRemitRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
