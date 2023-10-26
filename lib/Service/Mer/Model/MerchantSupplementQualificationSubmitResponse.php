<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantSupplementQualificationSubmitResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantSupplementQualificationSubmitSubmitMopQuaInfoRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationSubmitSubmitMopQuaInfoRespDTOResult';
    }

    /**
     * @param MerchantSupplementQualificationSubmitSubmitMopQuaInfoRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantSupplementQualificationSubmitSubmitMopQuaInfoRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
