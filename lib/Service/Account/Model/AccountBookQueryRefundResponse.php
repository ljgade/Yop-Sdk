<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookQueryRefundResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountBookQueryRefundQueryAccountBookRefundRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountBookQueryRefundQueryAccountBookRefundRespDTOResult';
    }

    /**
     * @param AccountBookQueryRefundQueryAccountBookRefundRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountBookQueryRefundQueryAccountBookRefundRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
