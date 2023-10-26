<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class CreateShopRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $address;
    /**
     * @var string
     */
    private $province;
    /**
     * @var string
     */
    private $city;
    /**
     * @var string
     */
    private $district;
    /**
     * @var string
     */
    private $mobile;
    /**
     * @var string
     */
    private $shopName;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $linkman;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Sets address
     *
     * @param string $address
     * @return CreateShopRequest
     */
    public function setAddress($address)
    {
        $this->address = $address;
        return $this;
    }
    /**
     * Gets province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Sets province
     *
     * @param string $province
     * @return CreateShopRequest
     */
    public function setProvince($province)
    {
        $this->province = $province;
        return $this;
    }
    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets city
     *
     * @param string $city
     * @return CreateShopRequest
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }
    /**
     * Gets district
     *
     * @return string
     */
    public function getDistrict()
    {
        return $this->district;
    }

    /**
     * Sets district
     *
     * @param string $district
     * @return CreateShopRequest
     */
    public function setDistrict($district)
    {
        $this->district = $district;
        return $this;
    }
    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets mobile
     *
     * @param string $mobile
     * @return CreateShopRequest
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
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
     * @return CreateShopRequest
     */
    public function setShopName($shopName)
    {
        $this->shopName = $shopName;
        return $this;
    }
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
     * @return CreateShopRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets linkman
     *
     * @return string
     */
    public function getLinkman()
    {
        return $this->linkman;
    }

    /**
     * Sets linkman
     *
     * @param string $linkman
     * @return CreateShopRequest
     */
    public function setLinkman($linkman)
    {
        $this->linkman = $linkman;
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
     * @return CreateShopRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'createShop';
    }


}
