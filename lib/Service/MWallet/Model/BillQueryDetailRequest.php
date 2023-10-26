<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BillQueryDetailRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $merchantUserNo;
    /**
     * @var string
     */
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $orderType;
    /**
     * @var \DateTime
     */
    private $orderDate;

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
     * @return BillQueryDetailRequest
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
     * @return BillQueryDetailRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantUserNo
     *
     * @return string
     */
    public function getMerchantUserNo()
    {
        return $this->merchantUserNo;
    }

    /**
     * Sets merchantUserNo
     *
     * @param string $merchantUserNo
     * @return BillQueryDetailRequest
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->uniqueOrderNo;
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo
     * @return BillQueryDetailRequest
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }
    /**
     * Gets orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets orderType
     *
     * @param string $orderType
     * @return BillQueryDetailRequest
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        return $this;
    }
    /**
     * Gets orderDate
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * Sets orderDate
     *
     * @param \DateTime $orderDate
     * @return BillQueryDetailRequest
     */
    public function setOrderDate($orderDate)
    {
        $this->orderDate = $orderDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bill_query_detail';
    }


}
