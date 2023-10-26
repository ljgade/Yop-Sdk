<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class UpdateShopRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $address;
    /**
     * @var string
     */
    private $mobile;
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
     * @return UpdateShopRequest
     */
    public function setAddress($address)
    {
        $this->address = $address;
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
     * @return UpdateShopRequest
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
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
     * @return UpdateShopRequest
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
     * @return UpdateShopRequest
     */
    public function setShopNo($shopNo)
    {
        $this->shopNo = $shopNo;
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
     * @return UpdateShopRequest
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
     * @return UpdateShopRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'updateShop';
    }


}
