<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountQueryOpenResultResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryOpenResultResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryOpenResultResponseDTO';
    }

    /**
     * @param QueryOpenResultResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryOpenResultResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
