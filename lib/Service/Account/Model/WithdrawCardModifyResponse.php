<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawCardModifyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WithdrawCardModifyModifyBindCardRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardModifyModifyBindCardRespDTOResult';
    }

    /**
     * @param WithdrawCardModifyModifyBindCardRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawCardModifyModifyBindCardRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
