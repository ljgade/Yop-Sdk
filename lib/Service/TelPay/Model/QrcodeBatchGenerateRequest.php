<?php


namespace Yeepay\Yop\Sdk\Service\TelPay\Model;


class QrcodeBatchGenerateRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @var string
     */
    private $qrCodeInfo;
    /**
     * @var string
     */
    private $districtCode;

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
     * @return QrcodeBatchGenerateRequest
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
     * @return QrcodeBatchGenerateRequest
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
     * @return QrcodeBatchGenerateRequest
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
        return $this;
    }
    /**
     * Gets qrCodeInfo
     *
     * @return string
     */
    public function getQrCodeInfo()
    {
        return $this->qrCodeInfo;
    }

    /**
     * Sets qrCodeInfo
     *
     * @param string $qrCodeInfo
     * @return QrcodeBatchGenerateRequest
     */
    public function setQrCodeInfo($qrCodeInfo)
    {
        $this->qrCodeInfo = $qrCodeInfo;
        return $this;
    }
    /**
     * Gets districtCode
     *
     * @return string
     */
    public function getDistrictCode()
    {
        return $this->districtCode;
    }

    /**
     * Sets districtCode
     *
     * @param string $districtCode
     * @return QrcodeBatchGenerateRequest
     */
    public function setDistrictCode($districtCode)
    {
        $this->districtCode = $districtCode;
        return $this;
    }

    public static function getOperationId()
    {
        return 'qrcodeBatchGenerate';
    }


}
