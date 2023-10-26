<?php


namespace Yeepay\Yop\Sdk\Service\Cashier\Model;


class UnifiedOrderRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $orderId;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $goodsName;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $memo;
    /**
     * @var string
     */
    private $expiredTime;
    /**
     * @var string
     */
    private $returnUrl;
    /**
     * @var string
     */
    private $csNotifyUrl;
    /**
     * @var string
     */
    private $businessInfo;
    /**
     * @var string
     */
    private $payerInfo;
    /**
     * @var string
     */
    private $limitPayType;
    /**
     * @var string
     */
    private $cardType;
    /**
     * @var string
     */
    private $aggParam;
    /**
     * @var string
     */
    private $noCardParam;
    /**
     * @var string
     */
    private $productInfo;
    /**
     * @var string
     */
    private $divideDetail;
    /**
     * @var string
     */
    private $divideNotifyUrl;

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
     * @return UnifiedOrderRequest
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
     * @return UnifiedOrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
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
     * @return UnifiedOrderRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->orderAmount;
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount
     * @return UnifiedOrderRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets goodsName
     *
     * @return string
     */
    public function getGoodsName()
    {
        return $this->goodsName;
    }

    /**
     * Sets goodsName
     *
     * @param string $goodsName
     * @return UnifiedOrderRequest
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }
    /**
     * Gets fundProcessType
     *
     * @return string
     */
    public function getFundProcessType()
    {
        return $this->fundProcessType;
    }

    /**
     * Sets fundProcessType
     *
     * @param string $fundProcessType
     * @return UnifiedOrderRequest
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return UnifiedOrderRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets memo
     *
     * @return string
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Sets memo
     *
     * @param string $memo
     * @return UnifiedOrderRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }
    /**
     * Gets expiredTime
     *
     * @return string
     */
    public function getExpiredTime()
    {
        return $this->expiredTime;
    }

    /**
     * Sets expiredTime
     *
     * @param string $expiredTime
     * @return UnifiedOrderRequest
     */
    public function setExpiredTime($expiredTime)
    {
        $this->expiredTime = $expiredTime;
        return $this;
    }
    /**
     * Gets returnUrl
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Sets returnUrl
     *
     * @param string $returnUrl
     * @return UnifiedOrderRequest
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }
    /**
     * Gets csNotifyUrl
     *
     * @return string
     */
    public function getCsNotifyUrl()
    {
        return $this->csNotifyUrl;
    }

    /**
     * Sets csNotifyUrl
     *
     * @param string $csNotifyUrl
     * @return UnifiedOrderRequest
     */
    public function setCsNotifyUrl($csNotifyUrl)
    {
        $this->csNotifyUrl = $csNotifyUrl;
        return $this;
    }
    /**
     * Gets businessInfo
     *
     * @return string
     */
    public function getBusinessInfo()
    {
        return $this->businessInfo;
    }

    /**
     * Sets businessInfo
     *
     * @param string $businessInfo
     * @return UnifiedOrderRequest
     */
    public function setBusinessInfo($businessInfo)
    {
        $this->businessInfo = $businessInfo;
        return $this;
    }
    /**
     * Gets payerInfo
     *
     * @return string
     */
    public function getPayerInfo()
    {
        return $this->payerInfo;
    }

    /**
     * Sets payerInfo
     *
     * @param string $payerInfo
     * @return UnifiedOrderRequest
     */
    public function setPayerInfo($payerInfo)
    {
        $this->payerInfo = $payerInfo;
        return $this;
    }
    /**
     * Gets limitPayType
     *
     * @return string
     */
    public function getLimitPayType()
    {
        return $this->limitPayType;
    }

    /**
     * Sets limitPayType
     *
     * @param string $limitPayType
     * @return UnifiedOrderRequest
     */
    public function setLimitPayType($limitPayType)
    {
        $this->limitPayType = $limitPayType;
        return $this;
    }
    /**
     * Gets cardType
     *
     * @return string
     */
    public function getCardType()
    {
        return $this->cardType;
    }

    /**
     * Sets cardType
     *
     * @param string $cardType
     * @return UnifiedOrderRequest
     */
    public function setCardType($cardType)
    {
        $this->cardType = $cardType;
        return $this;
    }
    /**
     * Gets aggParam
     *
     * @return string
     */
    public function getAggParam()
    {
        return $this->aggParam;
    }

    /**
     * Sets aggParam
     *
     * @param string $aggParam
     * @return UnifiedOrderRequest
     */
    public function setAggParam($aggParam)
    {
        $this->aggParam = $aggParam;
        return $this;
    }
    /**
     * Gets noCardParam
     *
     * @return string
     */
    public function getNoCardParam()
    {
        return $this->noCardParam;
    }

    /**
     * Sets noCardParam
     *
     * @param string $noCardParam
     * @return UnifiedOrderRequest
     */
    public function setNoCardParam($noCardParam)
    {
        $this->noCardParam = $noCardParam;
        return $this;
    }
    /**
     * Gets productInfo
     *
     * @return string
     */
    public function getProductInfo()
    {
        return $this->productInfo;
    }

    /**
     * Sets productInfo
     *
     * @param string $productInfo
     * @return UnifiedOrderRequest
     */
    public function setProductInfo($productInfo)
    {
        $this->productInfo = $productInfo;
        return $this;
    }
    /**
     * Gets divideDetail
     *
     * @return string
     */
    public function getDivideDetail()
    {
        return $this->divideDetail;
    }

    /**
     * Sets divideDetail
     *
     * @param string $divideDetail
     * @return UnifiedOrderRequest
     */
    public function setDivideDetail($divideDetail)
    {
        $this->divideDetail = $divideDetail;
        return $this;
    }
    /**
     * Gets divideNotifyUrl
     *
     * @return string
     */
    public function getDivideNotifyUrl()
    {
        return $this->divideNotifyUrl;
    }

    /**
     * Sets divideNotifyUrl
     *
     * @param string $divideNotifyUrl
     * @return UnifiedOrderRequest
     */
    public function setDivideNotifyUrl($divideNotifyUrl)
    {
        $this->divideNotifyUrl = $divideNotifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'unifiedOrder';
    }


}
