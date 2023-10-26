<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AutoWithdrawRuleQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult';
    }

    /**
     * @param AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AutoWithdrawRuleQueryYopAutoWithdrawRuleQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
