<?php


namespace Yeepay\Yop\Sdk\Service\TelPay\Model;


class QrcodeQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $requestId;
    /**
     * @var int
     */
    private $pageSize;
    /**
     * @var int
     */
    private $pageNo;
    /**
     * @var string
     */
    private $qrId;
    /**
     * @var string
     */
    private $startTime;
    /**
     * @var string
     */
    private $endTime;
    /**
     * @var string
     */
    private $qrStatus;

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
     * @return QrcodeQueryRequest
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
     * @return QrcodeQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets requestId
     *
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Sets requestId
     *
     * @param string $requestId
     * @return QrcodeQueryRequest
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
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
     * @return QrcodeQueryRequest
     */
    public function setPageSize($pageSize)
    {
        $this->pageSize = $pageSize;
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
     * @return QrcodeQueryRequest
     */
    public function setPageNo($pageNo)
    {
        $this->pageNo = $pageNo;
        return $this;
    }
    /**
     * Gets qrId
     *
     * @return string
     */
    public function getQrId()
    {
        return $this->qrId;
    }

    /**
     * Sets qrId
     *
     * @param string $qrId
     * @return QrcodeQueryRequest
     */
    public function setQrId($qrId)
    {
        $this->qrId = $qrId;
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
     * @return QrcodeQueryRequest
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
     * @return QrcodeQueryRequest
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
        return $this;
    }
    /**
     * Gets qrStatus
     *
     * @return string
     */
    public function getQrStatus()
    {
        return $this->qrStatus;
    }

    /**
     * Sets qrStatus
     *
     * @param string $qrStatus
     * @return QrcodeQueryRequest
     */
    public function setQrStatus($qrStatus)
    {
        $this->qrStatus = $qrStatus;
        return $this;
    }

    public static function getOperationId()
    {
        return 'qrcodeQuery';
    }


}
