<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class CompanyFinanceTransactionQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult';
    }

    /**
     * @param CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceTransactionQueryCompQueryTransactionListResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
