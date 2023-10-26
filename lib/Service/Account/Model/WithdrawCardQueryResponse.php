<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawCardQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WithdrawCardQueryBindCardQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardQueryBindCardQueryRespDTOResult';
    }

    /**
     * @param WithdrawCardQueryBindCardQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawCardQueryBindCardQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
