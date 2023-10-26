<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WechatConfigQueryV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatConfigQueryV2WechatConfigFlatResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigQueryV2WechatConfigFlatResponseDTOResult';
    }

    /**
     * @param WechatConfigQueryV2WechatConfigFlatResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigQueryV2WechatConfigFlatResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
