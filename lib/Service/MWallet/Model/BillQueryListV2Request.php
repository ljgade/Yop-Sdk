<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BillQueryListV2Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var int
     */
    private $page;
    /**
     * @var int
     */
    private $pageNum;
    /**
     * @var string
     */
    private $endTime;
    /**
     * @var string
     */
    private $orderType;
    /**
     * @var string
     */
    private $fundDirection;

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
     * @return BillQueryListV2Request
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
     * @return BillQueryListV2Request
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
     * @return BillQueryListV2Request
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
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
     * @return BillQueryListV2Request
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
     * @return BillQueryListV2Request
     */
    public function setPageNum($pageNum)
    {
        $this->pageNum = $pageNum;
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
     * @return BillQueryListV2Request
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
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
     * @return BillQueryListV2Request
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;
        return $this;
    }
    /**
     * Gets fundDirection
     *
     * @return string
     */
    public function getFundDirection()
    {
        return $this->fundDirection;
    }

    /**
     * Sets fundDirection
     *
     * @param string $fundDirection
     * @return BillQueryListV2Request
     */
    public function setFundDirection($fundDirection)
    {
        $this->fundDirection = $fundDirection;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billQueryListV2';
    }


}
