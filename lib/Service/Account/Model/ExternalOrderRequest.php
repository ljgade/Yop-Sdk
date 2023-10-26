<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class ExternalOrderRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $channelName;
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $merchantName;
    /**
     * @var string
     */
    private $goodsName;
    /**
     * @var string
     */
    private $trxDate;
    /**
     * @var string
     */
    private $finishDate;
    /**
     * @var float
     */
    private $orderAmount;
    /**
     * @var float
     */
    private $realAmount;
    /**
     * @var string
     */
    private $payerUserId;
    /**
     * @var string
     */
    private $payWay;
    /**
     * @var string
     */
    private $payCardNo;
    /**
     * @var string
     */
    private $payCardType;
    /**
     * @var string
     */
    private $userRequestIp;
    /**
     * @var string
     */
    private $trxType;
    /**
     * @var string
     */
    private $batchNo;
    /**
     * @var string
     */
    private $channelExtInfo;

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
     * @return ExternalOrderRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return ExternalOrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets channelName
     *
     * @return string
     */
    public function getChannelName()
    {
        return $this->channelName;
    }

    /**
     * Sets channelName
     *
     * @param string $channelName
     * @return ExternalOrderRequest
     */
    public function setChannelName($channelName)
    {
        $this->channelName = $channelName;
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
     * @return ExternalOrderRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
        return $this;
    }
    /**
     * Gets merchantName
     *
     * @return string
     */
    public function getMerchantName()
    {
        return $this->merchantName;
    }

    /**
     * Sets merchantName
     *
     * @param string $merchantName
     * @return ExternalOrderRequest
     */
    public function setMerchantName($merchantName)
    {
        $this->merchantName = $merchantName;
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
     * @return ExternalOrderRequest
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }
    /**
     * Gets trxDate
     *
     * @return string
     */
    public function getTrxDate()
    {
        return $this->trxDate;
    }

    /**
     * Sets trxDate
     *
     * @param string $trxDate
     * @return ExternalOrderRequest
     */
    public function setTrxDate($trxDate)
    {
        $this->trxDate = $trxDate;
        return $this;
    }
    /**
     * Gets finishDate
     *
     * @return string
     */
    public function getFinishDate()
    {
        return $this->finishDate;
    }

    /**
     * Sets finishDate
     *
     * @param string $finishDate
     * @return ExternalOrderRequest
     */
    public function setFinishDate($finishDate)
    {
        $this->finishDate = $finishDate;
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
     * @return ExternalOrderRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
        return $this;
    }
    /**
     * Gets realAmount
     *
     * @return float
     */
    public function getRealAmount()
    {
        return $this->realAmount;
    }

    /**
     * Sets realAmount
     *
     * @param float $realAmount
     * @return ExternalOrderRequest
     */
    public function setRealAmount($realAmount)
    {
        $this->realAmount = $realAmount;
        return $this;
    }
    /**
     * Gets payerUserId
     *
     * @return string
     */
    public function getPayerUserId()
    {
        return $this->payerUserId;
    }

    /**
     * Sets payerUserId
     *
     * @param string $payerUserId
     * @return ExternalOrderRequest
     */
    public function setPayerUserId($payerUserId)
    {
        $this->payerUserId = $payerUserId;
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
     * @return ExternalOrderRequest
     */
    public function setPayWay($payWay)
    {
        $this->payWay = $payWay;
        return $this;
    }
    /**
     * Gets payCardNo
     *
     * @return string
     */
    public function getPayCardNo()
    {
        return $this->payCardNo;
    }

    /**
     * Sets payCardNo
     *
     * @param string $payCardNo
     * @return ExternalOrderRequest
     */
    public function setPayCardNo($payCardNo)
    {
        $this->payCardNo = $payCardNo;
        return $this;
    }
    /**
     * Gets payCardType
     *
     * @return string
     */
    public function getPayCardType()
    {
        return $this->payCardType;
    }

    /**
     * Sets payCardType
     *
     * @param string $payCardType
     * @return ExternalOrderRequest
     */
    public function setPayCardType($payCardType)
    {
        $this->payCardType = $payCardType;
        return $this;
    }
    /**
     * Gets userRequestIp
     *
     * @return string
     */
    public function getUserRequestIp()
    {
        return $this->userRequestIp;
    }

    /**
     * Sets userRequestIp
     *
     * @param string $userRequestIp
     * @return ExternalOrderRequest
     */
    public function setUserRequestIp($userRequestIp)
    {
        $this->userRequestIp = $userRequestIp;
        return $this;
    }
    /**
     * Gets trxType
     *
     * @return string
     */
    public function getTrxType()
    {
        return $this->trxType;
    }

    /**
     * Sets trxType
     *
     * @param string $trxType
     * @return ExternalOrderRequest
     */
    public function setTrxType($trxType)
    {
        $this->trxType = $trxType;
        return $this;
    }
    /**
     * Gets batchNo
     *
     * @return string
     */
    public function getBatchNo()
    {
        return $this->batchNo;
    }

    /**
     * Sets batchNo
     *
     * @param string $batchNo
     * @return ExternalOrderRequest
     */
    public function setBatchNo($batchNo)
    {
        $this->batchNo = $batchNo;
        return $this;
    }
    /**
     * Gets channelExtInfo
     *
     * @return string
     */
    public function getChannelExtInfo()
    {
        return $this->channelExtInfo;
    }

    /**
     * Sets channelExtInfo
     *
     * @param string $channelExtInfo
     * @return ExternalOrderRequest
     */
    public function setChannelExtInfo($channelExtInfo)
    {
        $this->channelExtInfo = $channelExtInfo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'externalOrder';
    }


}
