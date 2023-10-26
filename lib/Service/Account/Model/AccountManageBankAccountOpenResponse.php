<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageBankAccountOpenResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var StandardOpenAccountResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountResponseDTO';
    }

    /**
     * @param StandardOpenAccountResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return StandardOpenAccountResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
