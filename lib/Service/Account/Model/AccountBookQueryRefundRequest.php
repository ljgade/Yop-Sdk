<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountBookQueryRefundRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantRefundRequestNo;

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
     * @return AccountBookQueryRefundRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return AccountBookQueryRefundRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets merchantRefundRequestNo
     *
     * @return string
     */
    public function getMerchantRefundRequestNo()
    {
        return $this->merchantRefundRequestNo;
    }

    /**
     * Sets merchantRefundRequestNo
     *
     * @param string $merchantRefundRequestNo
     * @return AccountBookQueryRefundRequest
     */
    public function setMerchantRefundRequestNo($merchantRefundRequestNo)
    {
        $this->merchantRefundRequestNo = $merchantRefundRequestNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountBookQueryRefund';
    }


}
