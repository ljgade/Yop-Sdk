<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class CompanyFinanceRedeemOrderRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $p2fOpenAcctNo;
    /**
     * @var string
     */
    private $prodCode;
    /**
     * @var float
     */
    private $amount;
    /**
     * @var string
     */
    private $remark;
    /**
     * @var string
     */
    private $channelCode;
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
    private $notifyUrl;
    /**
     * @var string
     */
    private $p2fOrderId;
    /**
     * @var string
     */
    private $requestTime;

    /**
     * Gets p2fOpenAcctNo
     *
     * @return string
     */
    public function getP2fOpenAcctNo()
    {
        return $this->p2fOpenAcctNo;
    }

    /**
     * Sets p2fOpenAcctNo
     *
     * @param string $p2fOpenAcctNo
     * @return CompanyFinanceRedeemOrderRequest
     */
    public function setP2fOpenAcctNo($p2fOpenAcctNo)
    {
        $this->p2fOpenAcctNo = $p2fOpenAcctNo;
        return $this;
    }
    /**
     * Gets prodCode
     *
     * @return string
     */
    public function getProdCode()
    {
        return $this->prodCode;
    }

    /**
     * Sets prodCode
     *
     * @param string $prodCode
     * @return CompanyFinanceRedeemOrderRequest
     */
    public function setProdCode($prodCode)
    {
        $this->prodCode = $prodCode;
        return $this;
    }
    /**
     * Gets amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Sets amount
     *
     * @param float $amount
     * @return CompanyFinanceRedeemOrderRequest
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
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
     * @return CompanyFinanceRedeemOrderRequest
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }
    /**
     * Gets channelCode
     *
     * @return string
     */
    public function getChannelCode()
    {
        return $this->channelCode;
    }

    /**
     * Sets channelCode
     *
     * @param string $channelCode
     * @return CompanyFinanceRedeemOrderRequest
     */
    public function setChannelCode($channelCode)
    {
        $this->channelCode = $channelCode;
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
     * @return CompanyFinanceRedeemOrderRequest
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
     * @return CompanyFinanceRedeemOrderRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return CompanyFinanceRedeemOrderRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets p2fOrderId
     *
     * @return string
     */
    public function getP2fOrderId()
    {
        return $this->p2fOrderId;
    }

    /**
     * Sets p2fOrderId
     *
     * @param string $p2fOrderId
     * @return CompanyFinanceRedeemOrderRequest
     */
    public function setP2fOrderId($p2fOrderId)
    {
        $this->p2fOrderId = $p2fOrderId;
        return $this;
    }
    /**
     * Gets requestTime
     *
     * @return string
     */
    public function getRequestTime()
    {
        return $this->requestTime;
    }

    /**
     * Sets requestTime
     *
     * @param string $requestTime
     * @return CompanyFinanceRedeemOrderRequest
     */
    public function setRequestTime($requestTime)
    {
        $this->requestTime = $requestTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'companyFinanceRedeemOrder';
    }


}
