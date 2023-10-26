<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class QueryShopBindListRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $shopNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets parentMerchantNo
     *
     * @return string
     */
    public function getParentMerchantNo()
    {
        return $this->parentMerchantNo;
    }

    /**
     * Sets parentMerchantNo
     *
     * @param string $parentMerchantNo
     * @return QueryShopBindListRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets shopNo
     *
     * @return string
     */
    public function getShopNo()
    {
        return $this->shopNo;
    }

    /**
     * Sets shopNo
     *
     * @param string $shopNo
     * @return QueryShopBindListRequest
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
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
     * @return QueryShopBindListRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'queryShopBindList';
    }


}
