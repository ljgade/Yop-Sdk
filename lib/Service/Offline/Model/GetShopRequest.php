<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class GetShopRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $shopName;
    /**
     * @var string
     */
    private $shopNo;
    /**
     * @var string
     */
    private $status;

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
     * @return GetShopRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return GetShopRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets shopName
     *
     * @return string
     */
    public function getShopName()
    {
        return $this->shopName;
    }

    /**
     * Sets shopName
     *
     * @param string $shopName
     * @return GetShopRequest
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;
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
     * @return GetShopRequest
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
        return $this;
    }
    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Sets status
     *
     * @param string $status
     * @return GetShopRequest
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    public static function getOperationId()
    {
        return 'getShop';
    }


}
