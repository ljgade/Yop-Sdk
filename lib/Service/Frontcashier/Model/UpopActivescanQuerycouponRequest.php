<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopActivescanQuerycouponRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var string
     */
    private $paySerialNo;
    /**
     * @var float
     */
    private $tradeAmount;
    /**
     * @var int
     */
    private $bindId;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $userType;
    /**
     * @var string
     */
    private $riskInfoDeviceID;
    /**
     * @var string
     */
    private $riskInfoDeviceType;
    /**
     * @var string
     */
    private $riskInfoAccountIDHash;
    /**
     * @var string
     */
    private $riskInfoSourceIP;

    /**
     * Gets merchantFlowId
     *
     * @return string
     */
    public function getMerchantFlowId()
    {
        return $this->merchantFlowId;
    }

    /**
     * Sets merchantFlowId
     *
     * @param string $merchantFlowId
     * @return UpopActivescanQuerycouponRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
        return $this;
    }
    /**
     * Gets paySerialNo
     *
     * @return string
     */
    public function getPaySerialNo()
    {
        return $this->paySerialNo;
    }

    /**
     * Sets paySerialNo
     *
     * @param string $paySerialNo
     * @return UpopActivescanQuerycouponRequest
     */
    public function setPaySerialNo($paySerialNo)
    {
        $this->paySerialNo = $paySerialNo;
        return $this;
    }
    /**
     * Gets tradeAmount
     *
     * @return float
     */
    public function getTradeAmount()
    {
        return $this->tradeAmount;
    }

    /**
     * Sets tradeAmount
     *
     * @param float $tradeAmount
     * @return UpopActivescanQuerycouponRequest
     */
    public function setTradeAmount($tradeAmount)
    {
        $this->tradeAmount = $tradeAmount;
        return $this;
    }
    /**
     * Gets bindId
     *
     * @return int
     */
    public function getBindId()
    {
        return $this->bindId;
    }

    /**
     * Sets bindId
     *
     * @param int $bindId
     * @return UpopActivescanQuerycouponRequest
     */
    public function setBindId($bindId)
    {
        $this->bindId = $bindId;
        return $this;
    }
    /**
     * Gets userNo
     *
     * @return string
     */
    public function getUserNo()
    {
        return $this->userNo;
    }

    /**
     * Sets userNo
     *
     * @param string $userNo
     * @return UpopActivescanQuerycouponRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }
    /**
     * Gets userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Sets userType
     *
     * @param string $userType
     * @return UpopActivescanQuerycouponRequest
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;
        return $this;
    }
    /**
     * Gets riskInfoDeviceID
     *
     * @return string
     */
    public function getRiskInfoDeviceID()
    {
        return $this->riskInfoDeviceID;
    }

    /**
     * Sets riskInfoDeviceID
     *
     * @param string $riskInfoDeviceID
     * @return UpopActivescanQuerycouponRequest
     */
    public function setRiskInfoDeviceID($riskInfoDeviceID)
    {
        $this->riskInfoDeviceID = $riskInfoDeviceID;
        return $this;
    }
    /**
     * Gets riskInfoDeviceType
     *
     * @return string
     */
    public function getRiskInfoDeviceType()
    {
        return $this->riskInfoDeviceType;
    }

    /**
     * Sets riskInfoDeviceType
     *
     * @param string $riskInfoDeviceType
     * @return UpopActivescanQuerycouponRequest
     */
    public function setRiskInfoDeviceType($riskInfoDeviceType)
    {
        $this->riskInfoDeviceType = $riskInfoDeviceType;
        return $this;
    }
    /**
     * Gets riskInfoAccountIDHash
     *
     * @return string
     */
    public function getRiskInfoAccountIDHash()
    {
        return $this->riskInfoAccountIDHash;
    }

    /**
     * Sets riskInfoAccountIDHash
     *
     * @param string $riskInfoAccountIDHash
     * @return UpopActivescanQuerycouponRequest
     */
    public function setRiskInfoAccountIDHash($riskInfoAccountIDHash)
    {
        $this->riskInfoAccountIDHash = $riskInfoAccountIDHash;
        return $this;
    }
    /**
     * Gets riskInfoSourceIP
     *
     * @return string
     */
    public function getRiskInfoSourceIP()
    {
        return $this->riskInfoSourceIP;
    }

    /**
     * Sets riskInfoSourceIP
     *
     * @param string $riskInfoSourceIP
     * @return UpopActivescanQuerycouponRequest
     */
    public function setRiskInfoSourceIP($riskInfoSourceIP)
    {
        $this->riskInfoSourceIP = $riskInfoSourceIP;
        return $this;
    }

    public static function getOperationId()
    {
        return 'upopActivescanQuerycoupon';
    }


}
