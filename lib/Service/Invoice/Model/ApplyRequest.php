<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class ApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $customerRequestNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $chargingDateStart;
    /**
     * @var string
     */
    private $chargingDateEnd;
    /**
     * @var string
     */
    private $notifyUrl;

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
     * @return ApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets customerRequestNo
     *
     * @return string
     */
    public function getCustomerRequestNo()
    {
        return $this->customerRequestNo;
    }

    /**
     * Sets customerRequestNo
     *
     * @param string $customerRequestNo
     * @return ApplyRequest
     */
    public function setCustomerRequestNo($customerRequestNo)
    {
        $this->customerRequestNo = $customerRequestNo;
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
     * @return ApplyRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets chargingDateStart
     *
     * @return string
     */
    public function getChargingDateStart()
    {
        return $this->chargingDateStart;
    }

    /**
     * Sets chargingDateStart
     *
     * @param string $chargingDateStart
     * @return ApplyRequest
     */
    public function setChargingDateStart($chargingDateStart)
    {
        $this->chargingDateStart = $chargingDateStart;
        return $this;
    }
    /**
     * Gets chargingDateEnd
     *
     * @return string
     */
    public function getChargingDateEnd()
    {
        return $this->chargingDateEnd;
    }

    /**
     * Sets chargingDateEnd
     *
     * @param string $chargingDateEnd
     * @return ApplyRequest
     */
    public function setChargingDateEnd($chargingDateEnd)
    {
        $this->chargingDateEnd = $chargingDateEnd;
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
     * @return ApplyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'apply';
    }


}
