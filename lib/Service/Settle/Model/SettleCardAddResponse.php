<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SettleCardAddResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SettleCardAddMerchantSettleCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Settle\Model\SettleCardAddMerchantSettleCardResponseDTOResult';
    }

    /**
     * @param SettleCardAddMerchantSettleCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SettleCardAddMerchantSettleCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
