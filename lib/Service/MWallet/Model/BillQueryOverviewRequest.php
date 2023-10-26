<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BillQueryOverviewRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $startMonth;
    /**
     * @var string
     */
    private $endMonth;

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
     * @return BillQueryOverviewRequest
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
     * @return BillQueryOverviewRequest
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
     * @return BillQueryOverviewRequest
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
    /**
     * Gets startMonth
     *
     * @return string
     */
    public function getStartMonth()
    {
        return $this->startMonth;
    }

    /**
     * Sets startMonth
     *
     * @param string $startMonth
     * @return BillQueryOverviewRequest
     */
    public function setStartMonth($startMonth)
    {
        $this->startMonth = $startMonth;
        return $this;
    }
    /**
     * Gets endMonth
     *
     * @return string
     */
    public function getEndMonth()
    {
        return $this->endMonth;
    }

    /**
     * Sets endMonth
     *
     * @param string $endMonth
     * @return BillQueryOverviewRequest
     */
    public function setEndMonth($endMonth)
    {
        $this->endMonth = $endMonth;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bill_query_overview';
    }


}
