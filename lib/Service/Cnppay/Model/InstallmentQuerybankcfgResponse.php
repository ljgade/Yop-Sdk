<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class InstallmentQuerybankcfgResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var InstallmentQuerybankcfgInstallmentBankCfgResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentQuerybankcfgInstallmentBankCfgResponseDTOResult';
    }

    /**
     * @param InstallmentQuerybankcfgInstallmentBankCfgResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return InstallmentQuerybankcfgInstallmentBankCfgResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
