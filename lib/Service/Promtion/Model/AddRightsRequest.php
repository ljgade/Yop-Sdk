<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class AddRightsRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $rightsCode;
    /**
     * @var string
     */
    private $startEffectDate;
    /**
     * @var string
     */
    private $endEffectDate;
    /**
     * @var string
     */
    private $brandNo;
    /**
     * @var string
     */
    private $title;
    /**
     * @var string
     */
    private $ruleDesc;
    /**
     * @var string
     */
    private $periodType;
    /**
     * @var int
     */
    private $period;
    /**
     * @var int
     */
    private $frequency;
    /**
     * @var string
     */
    private $businessType;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $productNo;
    /**
     * @var string
     */
    private $productName;

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
     * @return AddRightsRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets rightsCode
     *
     * @return string
     */
    public function getRightsCode()
    {
        return $this->rightsCode;
    }

    /**
     * Sets rightsCode
     *
     * @param string $rightsCode
     * @return AddRightsRequest
     */
    public function setRightsCode($rightsCode)
    {
        $this->rightsCode = $rightsCode;
        return $this;
    }
    /**
     * Gets startEffectDate
     *
     * @return string
     */
    public function getStartEffectDate()
    {
        return $this->startEffectDate;
    }

    /**
     * Sets startEffectDate
     *
     * @param string $startEffectDate
     * @return AddRightsRequest
     */
    public function setStartEffectDate($startEffectDate)
    {
        $this->startEffectDate = $startEffectDate;
        return $this;
    }
    /**
     * Gets endEffectDate
     *
     * @return string
     */
    public function getEndEffectDate()
    {
        return $this->endEffectDate;
    }

    /**
     * Sets endEffectDate
     *
     * @param string $endEffectDate
     * @return AddRightsRequest
     */
    public function setEndEffectDate($endEffectDate)
    {
        $this->endEffectDate = $endEffectDate;
        return $this;
    }
    /**
     * Gets brandNo
     *
     * @return string
     */
    public function getBrandNo()
    {
        return $this->brandNo;
    }

    /**
     * Sets brandNo
     *
     * @param string $brandNo
     * @return AddRightsRequest
     */
    public function setBrandNo($brandNo)
    {
        $this->brandNo = $brandNo;
        return $this;
    }
    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets title
     *
     * @param string $title
     * @return AddRightsRequest
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
    /**
     * Gets ruleDesc
     *
     * @return string
     */
    public function getRuleDesc()
    {
        return $this->ruleDesc;
    }

    /**
     * Sets ruleDesc
     *
     * @param string $ruleDesc
     * @return AddRightsRequest
     */
    public function setRuleDesc($ruleDesc)
    {
        $this->ruleDesc = $ruleDesc;
        return $this;
    }
    /**
     * Gets periodType
     *
     * @return string
     */
    public function getPeriodType()
    {
        return $this->periodType;
    }

    /**
     * Sets periodType
     *
     * @param string $periodType
     * @return AddRightsRequest
     */
    public function setPeriodType($periodType)
    {
        $this->periodType = $periodType;
        return $this;
    }
    /**
     * Gets period
     *
     * @return int
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * Sets period
     *
     * @param int $period
     * @return AddRightsRequest
     */
    public function setPeriod($period)
    {
        $this->period = $period;
        return $this;
    }
    /**
     * Gets frequency
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Sets frequency
     *
     * @param int $frequency
     * @return AddRightsRequest
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;
        return $this;
    }
    /**
     * Gets businessType
     *
     * @return string
     */
    public function getBusinessType()
    {
        return $this->businessType;
    }

    /**
     * Sets businessType
     *
     * @param string $businessType
     * @return AddRightsRequest
     */
    public function setBusinessType($businessType)
    {
        $this->businessType = $businessType;
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
     * @return AddRightsRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }
    /**
     * Gets productNo
     *
     * @return string
     */
    public function getProductNo()
    {
        return $this->productNo;
    }

    /**
     * Sets productNo
     *
     * @param string $productNo
     * @return AddRightsRequest
     */
    public function setProductNo($productNo)
    {
        $this->productNo = $productNo;
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
     * @return AddRightsRequest
     */
    public function setProductName($productName)
    {
        $this->productName = $productName;
        return $this;
    }

    public static function getOperationId()
    {
        return 'add_rights';
    }


}
