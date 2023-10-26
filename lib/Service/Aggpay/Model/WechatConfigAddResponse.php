<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class WechatConfigAddResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var WechatConfigAddWechatConfigResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\WechatConfigAddWechatConfigResponseDTOResult';
    }

    /**
     * @param WechatConfigAddWechatConfigResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return WechatConfigAddWechatConfigResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
