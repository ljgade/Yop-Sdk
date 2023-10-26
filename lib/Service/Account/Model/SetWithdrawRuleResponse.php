<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class SetWithdrawRuleResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SetWithdrawRuleWithdrawRuleRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\SetWithdrawRuleWithdrawRuleRespDTOResult';
    }

    /**
     * @param SetWithdrawRuleWithdrawRuleRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SetWithdrawRuleWithdrawRuleRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
