<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class CompanyFinanceOrderQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult';
    }

    /**
     * @param CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceOrderQueryCompQueryOrderStatusResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
