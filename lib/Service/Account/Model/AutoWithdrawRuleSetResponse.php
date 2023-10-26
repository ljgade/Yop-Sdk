<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AutoWithdrawRuleSetResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult';
    }

    /**
     * @param AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoWithdrawRuleSetYopAutoWithdrawRuleSetResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
