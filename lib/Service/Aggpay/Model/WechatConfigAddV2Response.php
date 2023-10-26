<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WechatConfigAddV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatConfigAddV2WechatConfigFlatResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddV2WechatConfigFlatResponseDTOResult';
    }

    /**
     * @param WechatConfigAddV2WechatConfigFlatResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigAddV2WechatConfigFlatResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
