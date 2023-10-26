<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class CompanyFinanceAccountQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CompanyFinanceAccountQueryCompCustOpenAcctRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAccountQueryCompCustOpenAcctRspDTOResult';
    }

    /**
     * @param CompanyFinanceAccountQueryCompCustOpenAcctRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceAccountQueryCompCustOpenAcctRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
