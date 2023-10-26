<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class CouponListQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
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
    private $couponStatus;
    /**
     * @var string
     */
    private $couponType;
    /**
     * @var string
     */
    private $startTime;
    /**
     * @var string
     */
    private $endTime;
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
     * @return CouponListQueryRequest
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
     * @return CouponListQueryRequest
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
    /**
     * Gets couponStatus
     *
     * @return string
     */
    public function getCouponStatus()
    {
        return $this->couponStatus;
    }

    /**
     * Sets couponStatus
     *
     * @param string $couponStatus
     * @return CouponListQueryRequest
     */
    public function setCouponStatus($couponStatus)
    {
        $this->couponStatus = $couponStatus;
        return $this;
    }
    /**
     * Gets couponType
     *
     * @return string
     */
    public function getCouponType()
    {
        return $this->couponType;
    }

    /**
     * Sets couponType
     *
     * @param string $couponType
     * @return CouponListQueryRequest
     */
    public function setCouponType($couponType)
    {
        $this->couponType = $couponType;
        return $this;
    }
    /**
     * Gets startTime
     *
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * Sets startTime
     *
     * @param string $startTime
     * @return CouponListQueryRequest
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
        return $this;
    }
    /**
     * Gets endTime
     *
     * @return string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets endTime
     *
     * @param string $endTime
     * @return CouponListQueryRequest
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
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
     * @return CouponListQueryRequest
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
     * @return CouponListQueryRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }

    public static function getOperationId()
    {
        return 'couponListQuery';
    }


}
