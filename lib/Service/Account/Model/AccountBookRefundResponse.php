<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookRefundResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookRefundAccountBookRefundRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookRefundAccountBookRefundRespDTOResult';
    }

    /**
     * @param AccountBookRefundAccountBookRefundRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookRefundAccountBookRefundRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
