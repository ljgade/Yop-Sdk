<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountQueryComplaintResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryComplaintOrderRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryComplaintOrderRespDTO';
    }

    /**
     * @param QueryComplaintOrderRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryComplaintOrderRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
