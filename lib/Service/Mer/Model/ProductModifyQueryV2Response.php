<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ProductModifyQueryV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult';
    }

    /**
     * @param ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProductModifyQueryV2ProductModifyProgressQueryRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
