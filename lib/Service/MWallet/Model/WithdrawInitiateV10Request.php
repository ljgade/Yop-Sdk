<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class WithdrawInitiateV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $amount;
    /**
     * @var string
     */
    private $returnUrl;
    /**
     * @var string
     */
    private $notifyUrl;
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
    private $merchantUserNo;
    /**
     * @var string
     */
    private $feeInnerType;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $withdrawType;

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
     * @return WithdrawInitiateV10Request
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * @return WithdrawInitiateV10Request
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
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
     * @return WithdrawInitiateV10Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return WithdrawInitiateV10Request
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
     * @return WithdrawInitiateV10Request
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
     * @return WithdrawInitiateV10Request
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
    /**
     * Gets feeInnerType
     *
     * @return string
     */
    public function getFeeInnerType()
    {
        return $this->feeInnerType;
    }

    /**
     * Sets feeInnerType
     *
     * @param string $feeInnerType
     * @return WithdrawInitiateV10Request
     */
    public function setFeeInnerType($feeInnerType)
    {
        $this->feeInnerType = $feeInnerType;
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
     * @return WithdrawInitiateV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets withdrawType
     *
     * @return string
     */
    public function getWithdrawType()
    {
        return $this->withdrawType;
    }

    /**
     * Sets withdrawType
     *
     * @param string $withdrawType
     * @return WithdrawInitiateV10Request
     */
    public function setWithdrawType($withdrawType)
    {
        $this->withdrawType = $withdrawType;
        return $this;
    }

    public static function getOperationId()
    {
        return 'withdraw_initiate_v1_0';
    }


}
