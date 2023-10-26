<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class WithdrawCardBindResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WithdrawCardBindBindCardRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\WithdrawCardBindBindCardRespDTOResult';
    }

    /**
     * @param WithdrawCardBindBindCardRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WithdrawCardBindBindCardRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
