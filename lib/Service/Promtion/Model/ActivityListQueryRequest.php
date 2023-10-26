<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class ActivityListQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $merchantActivityNo;
    /**
     * @var string
     */
    private $marketingNo;
    /**
     * @var string
     */
    private $activityStatus;
    /**
     * @var int
     */
    private $pageNo;
    /**
     * @var int
     */
    private $pageSize;

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
     * @return ActivityListQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantActivityNo
     *
     * @return string
     */
    public function getMerchantActivityNo()
    {
        return $this->merchantActivityNo;
    }

    /**
     * Sets merchantActivityNo
     *
     * @param string $merchantActivityNo
     * @return ActivityListQueryRequest
     */
    public function setMerchantActivityNo($merchantActivityNo)
    {
        $this->merchantActivityNo = $merchantActivityNo;
        return $this;
    }
    /**
     * Gets marketingNo
     *
     * @return string
     */
    public function getMarketingNo()
    {
        return $this->marketingNo;
    }

    /**
     * Sets marketingNo
     *
     * @param string $marketingNo
     * @return ActivityListQueryRequest
     */
    public function setMarketingNo($marketingNo)
    {
        $this->marketingNo = $marketingNo;
        return $this;
    }
    /**
     * Gets activityStatus
     *
     * @return string
     */
    public function getActivityStatus()
    {
        return $this->activityStatus;
    }

    /**
     * Sets activityStatus
     *
     * @param string $activityStatus
     * @return ActivityListQueryRequest
     */
    public function setActivityStatus($activityStatus)
    {
        $this->activityStatus = $activityStatus;
        return $this;
    }
    /**
     * Gets pageNo
     *
     * @return int
     */
    public function getPageNo()
    {
        return $this->pageNo;
    }

    /**
     * Sets pageNo
     *
     * @param int $pageNo
     * @return ActivityListQueryRequest
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }
    /**
     * Gets pageSize
     *
     * @return int
     */
    public function getPageSize()
    {
        return $this->pageSize;
    }

    /**
     * Sets pageSize
     *
     * @param int $pageSize
     * @return ActivityListQueryRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public static function getOperationId()
    {
        return 'activityListQuery';
    }


}
