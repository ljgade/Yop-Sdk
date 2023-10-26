<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class SubscribeExpireNotifyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SubscribeNotifyResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\SubscribeNotifyResponseDTO';
    }

    /**
     * @param SubscribeNotifyResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SubscribeNotifyResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
