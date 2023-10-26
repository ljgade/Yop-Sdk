<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class RightsQueryConsumeRecordsRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $operatedMerchantNo;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var int
     */
    private $pageNo;
    /**
     * @var int
     */
    private $pageSize;
    /**
     * @var string
     */
    private $consumeTimeEnd;
    /**
     * @var string
     */
    private $consumeTimeStart;
    /**
     * @var string
     */
    private $merchantNo;

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
     * @return RightsQueryConsumeRecordsRequest
     */
    public function setOperatedMerchantNo($operatedMerchantNo)
    {
        $this->operatedMerchantNo = $operatedMerchantNo;
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
     * @return RightsQueryConsumeRecordsRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
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
     * @return RightsQueryConsumeRecordsRequest
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
     * @return RightsQueryConsumeRecordsRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
        return $this;
    }
    /**
     * Gets consumeTimeEnd
     *
     * @return string
     */
    public function getConsumeTimeEnd()
    {
        return $this->consumeTimeEnd;
    }

    /**
     * Sets consumeTimeEnd
     *
     * @param string $consumeTimeEnd
     * @return RightsQueryConsumeRecordsRequest
     */
    public function setConsumeTimeEnd($consumeTimeEnd)
    {
        $this->consumeTimeEnd = $consumeTimeEnd;
        return $this;
    }
    /**
     * Gets consumeTimeStart
     *
     * @return string
     */
    public function getConsumeTimeStart()
    {
        return $this->consumeTimeStart;
    }

    /**
     * Sets consumeTimeStart
     *
     * @param string $consumeTimeStart
     * @return RightsQueryConsumeRecordsRequest
     */
    public function setConsumeTimeStart($consumeTimeStart)
    {
        $this->consumeTimeStart = $consumeTimeStart;
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
     * @return RightsQueryConsumeRecordsRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'rightsQueryConsumeRecords';
    }


}
