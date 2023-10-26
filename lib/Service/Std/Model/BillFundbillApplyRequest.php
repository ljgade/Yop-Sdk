<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillFundbillApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $startDate;
    /**
     * @var string
     */
    private $endDate;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $subMerchantNo;
    /**
     * @var string
     */
    private $accountType;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $billFormat;

    /**
     * Gets startDate
     *
     * @return string
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Sets startDate
     *
     * @param string $startDate
     * @return BillFundbillApplyRequest
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }
    /**
     * Gets endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets endDate
     *
     * @param string $endDate
     * @return BillFundbillApplyRequest
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
     * @return BillFundbillApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets subMerchantNo
     *
     * @return string
     */
    public function getSubMerchantNo()
    {
        return $this->subMerchantNo;
    }

    /**
     * Sets subMerchantNo
     *
     * @param string $subMerchantNo
     * @return BillFundbillApplyRequest
     */
    public function setSubMerchantNo($subMerchantNo)
    {
        $this->subMerchantNo = $subMerchantNo;
        return $this;
    }
    /**
     * Gets accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Sets accountType
     *
     * @param string $accountType
     * @return BillFundbillApplyRequest
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
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
     * @return BillFundbillApplyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets billFormat
     *
     * @return string
     */
    public function getBillFormat()
    {
        return $this->billFormat;
    }

    /**
     * Sets billFormat
     *
     * @param string $billFormat
     * @return BillFundbillApplyRequest
     */
    public function setBillFormat($billFormat)
    {
        $this->billFormat = $billFormat;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billFundbillApply';
    }


}
