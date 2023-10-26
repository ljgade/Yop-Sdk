<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class MerchantSupplementQualificationQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult';
    }

    /**
     * @param MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MerchantSupplementQualificationQueryQueryMopQuaInfoRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
