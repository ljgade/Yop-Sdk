<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay\Model;


class InstallmentPayRequestRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var float
     */
    private $orderAmount;
    /**
     * @var string
     */
    private $orderId;
    /**
     * @var string
     */
    private $fundProcessType;
    /**
     * @var string
     */
    private $bankId;
    /**
     * @var string
     */
    private $expireTime;
    /**
     * @var string
     */
    private $goodsName;
    /**
     * @var int
     */
    private $numOfInstallment;
    /**
     * @var string
     */
    private $riskInfo;
    /**
     * @var string
     */
    private $redirectUrl;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $csUrl;
    /**
     * @var string
     */
    private $memo;

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
     * @return InstallmentPayRequestRequest
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
     * @return InstallmentPayRequestRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return InstallmentPayRequestRequest
     */
    public function setOrderAmount($orderAmount)
    {
        $this->orderAmount = $orderAmount;
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
     * @return InstallmentPayRequestRequest
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;
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
     * @return InstallmentPayRequestRequest
     */
    public function setFundProcessType($fundProcessType)
    {
        $this->fundProcessType = $fundProcessType;
        return $this;
    }
    /**
     * Gets bankId
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->bankId;
    }

    /**
     * Sets bankId
     *
     * @param string $bankId
     * @return InstallmentPayRequestRequest
     */
    public function setBankId($bankId)
    {
        $this->bankId = $bankId;
        return $this;
    }
    /**
     * Gets expireTime
     *
     * @return string
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * Sets expireTime
     *
     * @param string $expireTime
     * @return InstallmentPayRequestRequest
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
     * @return InstallmentPayRequestRequest
     */
    public function setGoodsName($goodsName)
    {
        $this->goodsName = $goodsName;
        return $this;
    }
    /**
     * Gets numOfInstallment
     *
     * @return int
     */
    public function getNumOfInstallment()
    {
        return $this->numOfInstallment;
    }

    /**
     * Sets numOfInstallment
     *
     * @param int $numOfInstallment
     * @return InstallmentPayRequestRequest
     */
    public function setNumOfInstallment($numOfInstallment)
    {
        $this->numOfInstallment = $numOfInstallment;
        return $this;
    }
    /**
     * Gets riskInfo
     *
     * @return string
     */
    public function getRiskInfo()
    {
        return $this->riskInfo;
    }

    /**
     * Sets riskInfo
     *
     * @param string $riskInfo
     * @return InstallmentPayRequestRequest
     */
    public function setRiskInfo($riskInfo)
    {
        $this->riskInfo = $riskInfo;
        return $this;
    }
    /**
     * Gets redirectUrl
     *
     * @return string
     */
    public function getRedirectUrl()
    {
        return $this->redirectUrl;
    }

    /**
     * Sets redirectUrl
     *
     * @param string $redirectUrl
     * @return InstallmentPayRequestRequest
     */
    public function setRedirectUrl($redirectUrl)
    {
        $this->redirectUrl = $redirectUrl;
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
     * @return InstallmentPayRequestRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets csUrl
     *
     * @return string
     */
    public function getCsUrl()
    {
        return $this->csUrl;
    }

    /**
     * Sets csUrl
     *
     * @param string $csUrl
     * @return InstallmentPayRequestRequest
     */
    public function setCsUrl($csUrl)
    {
        $this->csUrl = $csUrl;
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
     * @return InstallmentPayRequestRequest
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'installmentPayRequest';
    }


}
