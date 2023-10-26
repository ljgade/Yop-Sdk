<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AccountQueryQuotaResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryMemberBalanceQuotaRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\YopQueryMemberBalanceQuotaRespDTO';
    }

    /**
     * @param YopQueryMemberBalanceQuotaRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryMemberBalanceQuotaRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
