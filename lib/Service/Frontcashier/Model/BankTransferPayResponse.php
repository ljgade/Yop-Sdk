<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BankTransferPayResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankTransferPayAPIOfflineTransferResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BankTransferPayAPIOfflineTransferResponseDTOResult';
    }

    /**
     * @param BankTransferPayAPIOfflineTransferResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankTransferPayAPIOfflineTransferResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
