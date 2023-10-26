<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class InstallmentPayRequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var InstallmentPayRequestInstallmentPayResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Cnppay\Model\InstallmentPayRequestInstallmentPayResponseDTOResult';
    }

    /**
     * @param InstallmentPayRequestInstallmentPayResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return InstallmentPayRequestInstallmentPayResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
