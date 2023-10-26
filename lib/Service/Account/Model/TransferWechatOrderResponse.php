<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class TransferWechatOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var TransferWechatOrderWechatTransferRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\TransferWechatOrderWechatTransferRespDTOResult';
    }

    /**
     * @param TransferWechatOrderWechatTransferRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return TransferWechatOrderWechatTransferRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
