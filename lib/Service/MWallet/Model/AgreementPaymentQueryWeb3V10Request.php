<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class AgreementPaymentQueryWeb3V10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $operatedMerchantNo;

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
     * @return AgreementPaymentQueryWeb3V10Request
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
     * @return AgreementPaymentQueryWeb3V10Request
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
     * @return AgreementPaymentQueryWeb3V10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return AgreementPaymentQueryWeb3V10Request
     */
    public function setOperatedMerchantNo($operatedMerchantNo)
    {
        $this->operatedMerchantNo = $operatedMerchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'agreement_payment_query_web3_v1_0';
    }


}
