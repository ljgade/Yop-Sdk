<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class AgreementNosmsbindResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AgreementNosmsbindAgreementBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\AgreementNosmsbindAgreementBindCardResponseDTOResult';
    }

    /**
     * @param AgreementNosmsbindAgreementBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AgreementNosmsbindAgreementBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
