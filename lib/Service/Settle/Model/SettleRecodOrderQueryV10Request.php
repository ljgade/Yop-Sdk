<?php


namespace Yeepay\Yop\Sdk\Service\Settle\Model;


class SettleRecodOrderQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $requestId;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $businessType;
    /**
     * @var string
     */
    private $uniqueOrderNo;
    /**
     * @var string
     */
    private $settleMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Sets orderId
     *
     * @param string $orderId
     * @return SettleRecodOrderQueryV10Request
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets requestId
     *
     * @param string $requestId
     * @return SettleRecodOrderQueryV10Request
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
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
     * @return SettleRecodOrderQueryV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets businessType
     *
     * @return string
     */
    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * Sets businessType
     *
     * @param string $businessType
     * @return SettleRecodOrderQueryV10Request
     */
    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
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
     * @return SettleRecodOrderQueryV10Request
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->uniqueOrderNo = $uniqueOrderNo;
        return $this;
    }
    /**
     * Gets settleMerchantNo
     *
     * @return string
     */
    public function getSettleMerchantNo()
    {
        return $this->settleMerchantNo;
    }

    /**
     * Sets settleMerchantNo
     *
     * @param string $settleMerchantNo
     * @return SettleRecodOrderQueryV10Request
     */
    public function setSettleMerchantNo($settleMerchantNo)
    {
        $this->settleMerchantNo = $settleMerchantNo;
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
     * @return SettleRecodOrderQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'settle_recod_order_query_v1_0';
    }


}
