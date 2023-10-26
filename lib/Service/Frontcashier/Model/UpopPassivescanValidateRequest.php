<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopPassivescanValidateRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantFlowId;
    /**
     * @var string
     */
    private $payOrderNo;
    /**
     * @var string
     */
    private $couponInfo;
    /**
     * @var float
     */
    private $realTradeAmount;

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
     * @return UpopPassivescanValidateRequest
     */
    public function setMerchantFlowId($merchantFlowId)
    {
        $this->merchantFlowId = $merchantFlowId;
        return $this;
    }
    /**
     * Gets payOrderNo
     *
     * @return string
     */
    public function getPayOrderNo()
    {
        return $this->payOrderNo;
    }

    /**
     * Sets payOrderNo
     *
     * @param string $payOrderNo
     * @return UpopPassivescanValidateRequest
     */
    public function setPayOrderNo($payOrderNo)
    {
        $this->payOrderNo = $payOrderNo;
        return $this;
    }
    /**
     * Gets couponInfo
     *
     * @return string
     */
    public function getCouponInfo()
    {
        return $this->couponInfo;
    }

    /**
     * Sets couponInfo
     *
     * @param string $couponInfo
     * @return UpopPassivescanValidateRequest
     */
    public function setCouponInfo($couponInfo)
    {
        $this->couponInfo = $couponInfo;
        return $this;
    }
    /**
     * Gets realTradeAmount
     *
     * @return float
     */
    public function getRealTradeAmount()
    {
        return $this->realTradeAmount;
    }

    /**
     * Sets realTradeAmount
     *
     * @param float $realTradeAmount
     * @return UpopPassivescanValidateRequest
     */
    public function setRealTradeAmount($realTradeAmount)
    {
        $this->realTradeAmount = $realTradeAmount;
        return $this;
    }

    public static function getOperationId()
    {
        return 'upopPassivescanValidate';
    }


}
