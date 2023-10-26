<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class CompanyFinanceSmallPaymentResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CompanyFinanceSmallPaymentCompCustOpenAcctConfirmRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceSmallPaymentCompCustOpenAcctConfirmRspDTOResult';
    }

    /**
     * @param CompanyFinanceSmallPaymentCompCustOpenAcctConfirmRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceSmallPaymentCompCustOpenAcctConfirmRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
