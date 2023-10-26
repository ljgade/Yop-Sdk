<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class FrozenRightsRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $productNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets productNo
     *
     * @return string
     */
    public function getProductNo()
    {
        return $this->productNo;
    }

    /**
     * Sets productNo
     *
     * @param string $productNo
     * @return FrozenRightsRequest
     */
    public function setProductNo($productNo)
    {
        $this->productNo = $productNo;
        return $this;
    }
    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->merchantNo;
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo
     * @return FrozenRightsRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'frozen_rights';
    }


}
