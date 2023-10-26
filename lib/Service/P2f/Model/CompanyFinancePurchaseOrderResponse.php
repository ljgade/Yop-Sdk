<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class CompanyFinancePurchaseOrderResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult';
    }

    /**
     * @param CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinancePurchaseOrderCompTranPurchaseRspDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
