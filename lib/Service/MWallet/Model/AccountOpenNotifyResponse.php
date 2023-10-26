<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AccountOpenNotifyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenSuccessNotifyResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\OpenSuccessNotifyResponseDTO';
    }

    /**
     * @param OpenSuccessNotifyResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenSuccessNotifyResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
