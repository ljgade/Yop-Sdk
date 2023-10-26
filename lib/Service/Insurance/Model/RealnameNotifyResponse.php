<?php


namespace Yeepay\Yop\Sdk\Service\Insurance\Model;


class RealnameNotifyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RealnameNotifyCommonNoticeResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Insurance\Model\RealnameNotifyCommonNoticeResponseDTOResult';
    }

    /**
     * @param RealnameNotifyCommonNoticeResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RealnameNotifyCommonNoticeResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
