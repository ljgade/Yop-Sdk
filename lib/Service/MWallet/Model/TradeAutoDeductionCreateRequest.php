<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class TradeAutoDeductionCreateRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $requestNo;
    /**
     * @var string
     */
    private $amount;
    /**
     * @var string
     */
    private $bindCardId;
    /**
     * @var string
     */
    private $payWay;
    /**
     * @var \DateTime
     */
    private $expireTime;
    /**
     * @var string
     */
    private $goodsName;

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
     * @return TradeAutoDeductionCreateRequest
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
     * @return TradeAutoDeductionCreateRequest
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
     * @return TradeAutoDeductionCreateRequest
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
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
     * @return TradeAutoDeductionCreateRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets amount
     *
     * @return string
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets amount
     *
     * @param string $amount
     * @return TradeAutoDeductionCreateRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }
    /**
     * Gets bindCardId
     *
     * @return string
     */
    public function getBindCardId()
    {
        return $this->bindCardId;
    }

    /**
     * Sets bindCardId
     *
     * @param string $bindCardId
     * @return TradeAutoDeductionCreateRequest
     */
    public function setBindCardId($bindCardId)
    {
        $this->bindCardId = $bindCardId;
        return $this;
    }
    /**
     * Gets payWay
     *
     * @return string
     */
    public function getPayWay()
    {
        return $this->payWay;
    }

    /**
     * Sets payWay
     *
     * @param string $payWay
     * @return TradeAutoDeductionCreateRequest
     */
    public function setPayWay($payWay)
    {
        $this->payWay = $payWay;
        return $this;
    }
    /**
     * Gets expireTime
     *
     * @return \DateTime
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * Sets expireTime
     *
     * @param \DateTime $expireTime
     * @return TradeAutoDeductionCreateRequest
     */
    public function setExpireTime($expireTime)
    {
        $this->expireTime = $expireTime;
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
     * @return TradeAutoDeductionCreateRequest
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }

    public static function getOperationId()
    {
        return 'tradeAutoDeductionCreate';
    }


}
