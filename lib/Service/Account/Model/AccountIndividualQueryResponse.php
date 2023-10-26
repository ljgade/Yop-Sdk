<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountIndividualQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryIndividualRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\QueryIndividualRespDTO';
    }

    /**
     * @param QueryIndividualRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryIndividualRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
