<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ProductFeeModifyV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ProductFeeModifyV2ModifyProductFeeRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ProductFeeModifyV2ModifyProductFeeRespDtoResult';
    }

    /**
     * @param ProductFeeModifyV2ModifyProductFeeRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProductFeeModifyV2ModifyProductFeeRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
