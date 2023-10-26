<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageBankAccountQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var StandardOpenAccountQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\StandardOpenAccountQueryResponseDTO';
    }

    /**
     * @param StandardOpenAccountQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return StandardOpenAccountQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
