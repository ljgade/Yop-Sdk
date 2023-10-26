<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class TransferB2cQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $fromMerchantNo;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $businessNo;

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
     * @return TransferB2cQueryV10Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets fromMerchantNo
     *
     * @return string
     */
    public function getFromMerchantNo()
    {
        return $this->fromMerchantNo;
    }

    /**
     * Sets fromMerchantNo
     *
     * @param string $fromMerchantNo
     * @return TransferB2cQueryV10Request
     */
    public function setFromMerchantNo($fromMerchantNo)
    {
        $this->fromMerchantNo = $fromMerchantNo;
        return $this;
    }
    /**
     * Gets requestNo
     *
     * @return string
     */
    public function getRequestNo()
    {
        return $this->requestNo;
    }

    /**
     * Sets requestNo
     *
     * @param string $requestNo
     * @return TransferB2cQueryV10Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets businessNo
     *
     * @return string
     */
    public function getBusinessNo()
    {
        return $this->businessNo;
    }

    /**
     * Sets businessNo
     *
     * @param string $businessNo
     * @return TransferB2cQueryV10Request
     */
    public function setBusinessNo($businessNo)
    {
        $this->businessNo = $businessNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'transfer_b2c_query_v1_0';
    }


}
