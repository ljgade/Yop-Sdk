<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class CompanyFinanceAssetsQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult';
    }

    /**
     * @param CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CompanyFinanceAssetsQueryCompQueryAssetsResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
