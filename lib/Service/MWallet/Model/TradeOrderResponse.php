<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class TradeOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MemberTradOrderResp
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberTradOrderResp';
    }

    /**
     * @param MemberTradOrderResp $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MemberTradOrderResp
     */
    function getResult()
    {
        return $this->result;
    }
}
