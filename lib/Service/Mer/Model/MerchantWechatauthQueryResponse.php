<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantWechatauthQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantWechatauthQueryQueryCertificateResultRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantWechatauthQueryQueryCertificateResultRespDtoResult';
    }

    /**
     * @param MerchantWechatauthQueryQueryCertificateResultRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantWechatauthQueryQueryCertificateResultRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
