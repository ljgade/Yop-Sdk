<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class CompanyFinanceAccountResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CompanyFinanceAccountCompCustOpenAcctRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAccountCompCustOpenAcctRspDTOResult';
    }

    /**
     * @param CompanyFinanceAccountCompCustOpenAcctRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceAccountCompCustOpenAcctRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
