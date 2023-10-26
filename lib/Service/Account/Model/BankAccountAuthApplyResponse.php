<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class BankAccountAuthApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var OpenAccountAuthApplyRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\OpenAccountAuthApplyRespDTO';
    }

    /**
     * @param OpenAccountAuthApplyRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return OpenAccountAuthApplyRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
