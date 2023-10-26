<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountAuthConfirmResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenAccountAuthConfirmRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthConfirmRespDTO';
    }

    /**
     * @param OpenAccountAuthConfirmRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenAccountAuthConfirmRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
