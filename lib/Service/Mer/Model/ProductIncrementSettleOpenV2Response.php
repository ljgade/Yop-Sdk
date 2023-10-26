<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class ProductIncrementSettleOpenV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ProductIncrementSettleOpenV2AddIncrementSettleProductRespDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\ProductIncrementSettleOpenV2AddIncrementSettleProductRespDtoResult';
    }

    /**
     * @param ProductIncrementSettleOpenV2AddIncrementSettleProductRespDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ProductIncrementSettleOpenV2AddIncrementSettleProductRespDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
