<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BillQueryListRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $orderType;
    /**
     * @var int
     */
    private $page;
    /**
     * @var int
     */
    private $pageNum;
    /**
     * @var \DateTime
     */
    private $endTime;

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
     * @return BillQueryListRequest
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
     * @return BillQueryListRequest
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
     * @return BillQueryListRequest
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
    /**
     * Gets orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Sets orderType
     *
     * @param string $orderType
     * @return BillQueryListRequest
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        return $this;
    }
    /**
     * Gets page
     *
     * @return int
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * Sets page
     *
     * @param int $page
     * @return BillQueryListRequest
     */
    public function setPage($page)
    {
        $this->page = $page;
        return $this;
    }
    /**
     * Gets pageNum
     *
     * @return int
     */
    public function getPageNum()
    {
        return $this->pageNum;
    }

    /**
     * Sets pageNum
     *
     * @param int $pageNum
     * @return BillQueryListRequest
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
        return $this;
    }
    /**
     * Gets endTime
     *
     * @return \DateTime
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * Sets endTime
     *
     * @param \DateTime $endTime
     * @return BillQueryListRequest
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bill_query_list';
    }


}
