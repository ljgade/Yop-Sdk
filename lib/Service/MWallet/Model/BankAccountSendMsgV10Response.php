<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountSendMsgV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BankShortMsgResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BankShortMsgResponseDTO';
    }

    /**
     * @param BankShortMsgResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BankShortMsgResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
