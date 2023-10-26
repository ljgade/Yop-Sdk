<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountIndividualApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApplyIndividualRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\ApplyIndividualRespDTO';
    }

    /**
     * @param ApplyIndividualRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApplyIndividualRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
