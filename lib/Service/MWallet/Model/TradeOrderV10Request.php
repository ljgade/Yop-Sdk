<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class TradeOrderV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
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
    private $payAmount;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $returnUrl;
    /**
     * @var string
     */
    private $productName;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $fundProcessType;

    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return TradeOrderV10Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return TradeOrderV10Request
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
     * @return TradeOrderV10Request
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
     * @return TradeOrderV10Request
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
    /**
     * Gets payAmount
     *
     * @return string
     */
    public function getPayAmount()
    {
        return $this->payAmount;
    }

    /**
     * Sets payAmount
     *
     * @param string $payAmount
     * @return TradeOrderV10Request
     */
    public function setPayAmount($payAmount)
    {
        $this->payAmount = $payAmount;
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
     * @return TradeOrderV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return TradeOrderV10Request
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }
    /**
     * Gets productName
     *
     * @return string
     */
    public function getProductName()
    {
        return $this->productName;
    }

    /**
     * Sets productName
     *
     * @param string $productName
     * @return TradeOrderV10Request
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }
    /**
     * Gets remark
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets remark
     *
     * @param string $remark
     * @return TradeOrderV10Request
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
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
     * @return TradeOrderV10Request
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'trade_order_v1_0';
    }


}
