<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class CouponListQueryWeb3Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantUserNo;
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
    private $queryType;
    /**
     * @var string
     */
    private $applyEndTime;
    /**
     * @var int
     */
    private $pageNo;
    /**
     * @var string
     */
    private $operatedMerchantNo;
    /**
     * @var int
     */
    private $pageSize;
    /**
     * @var string
     */
    private $applyStartTime;

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
     * @return CouponListQueryWeb3Request
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
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
     * @return CouponListQueryWeb3Request
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
     * @return CouponListQueryWeb3Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets queryType
     *
     * @return string
     */
    public function getQueryType()
    {
        return $this->queryType;
    }

    /**
     * Sets queryType
     *
     * @param string $queryType
     * @return CouponListQueryWeb3Request
     */
    public function setQueryType($queryType)
    {
        $this->queryType = $queryType;
        return $this;
    }
    /**
     * Gets applyEndTime
     *
     * @return string
     */
    public function getApplyEndTime()
    {
        return $this->applyEndTime;
    }

    /**
     * Sets applyEndTime
     *
     * @param string $applyEndTime
     * @return CouponListQueryWeb3Request
     */
    public function setApplyEndTime($applyEndTime)
    {
        $this->applyEndTime = $applyEndTime;
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
     * @return CouponListQueryWeb3Request
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }
    /**
     * Gets operatedMerchantNo
     *
     * @return string
     */
    public function getOperatedMerchantNo()
    {
        return $this->operatedMerchantNo;
    }

    /**
     * Sets operatedMerchantNo
     *
     * @param string $operatedMerchantNo
     * @return CouponListQueryWeb3Request
     */
    public function setOperatedMerchantNo($operatedMerchantNo)
    {
        $this->operatedMerchantNo = $operatedMerchantNo;
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
     * @return CouponListQueryWeb3Request
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Gets applyStartTime
     *
     * @return string
     */
    public function getApplyStartTime()
    {
        return $this->applyStartTime;
    }

    /**
     * Sets applyStartTime
     *
     * @param string $applyStartTime
     * @return CouponListQueryWeb3Request
     */
    public function setApplyStartTime($applyStartTime)
    {
        $this->applyStartTime = $applyStartTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'coupon_list_query_web3';
    }


}
