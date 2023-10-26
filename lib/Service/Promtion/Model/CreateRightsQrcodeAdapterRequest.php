<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class CreateRightsQrcodeAdapterRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $operatedMerchantNo;
    /**
     * @var string
     */
    private $rightsCode;
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $userNo;

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
     * @return CreateRightsQrcodeAdapterRequest
     */
    public function setOperatedMerchantNo($operatedMerchantNo)
    {
        $this->operatedMerchantNo = $operatedMerchantNo;
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
     * @return CreateRightsQrcodeAdapterRequest
     */
    public function setRightsCode($rightsCode)
    {
        $this->rightsCode = $rightsCode;
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
     * @return CreateRightsQrcodeAdapterRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return CreateRightsQrcodeAdapterRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'create_rights_qrcode_adapter';
    }


}
