<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountQueryComplaintV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantMemberNo;
    /**
     * @var string
     */
    private $accountNo;
    /**
     * @var string
     */
    private $bankTradeNo;
    /**
     * @var string
     */
    private $tradeTime;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets merchantMemberNo
     *
     * @return string
     */
    public function getMerchantMemberNo()
    {
        return $this->merchantMemberNo;
    }

    /**
     * Sets merchantMemberNo
     *
     * @param string $merchantMemberNo
     * @return BankAccountQueryComplaintV10Request
     */
    public function setMerchantMemberNo($merchantMemberNo)
    {
        $this->merchantMemberNo = $merchantMemberNo;
        return $this;
    }
    /**
     * Gets accountNo
     *
     * @return string
     */
    public function getAccountNo()
    {
        return $this->accountNo;
    }

    /**
     * Sets accountNo
     *
     * @param string $accountNo
     * @return BankAccountQueryComplaintV10Request
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }
    /**
     * Gets bankTradeNo
     *
     * @return string
     */
    public function getBankTradeNo()
    {
        return $this->bankTradeNo;
    }

    /**
     * Sets bankTradeNo
     *
     * @param string $bankTradeNo
     * @return BankAccountQueryComplaintV10Request
     */
    public function setBankTradeNo($bankTradeNo)
    {
        $this->bankTradeNo = $bankTradeNo;
        return $this;
    }
    /**
     * Gets tradeTime
     *
     * @return string
     */
    public function getTradeTime()
    {
        return $this->tradeTime;
    }

    /**
     * Sets tradeTime
     *
     * @param string $tradeTime
     * @return BankAccountQueryComplaintV10Request
     */
    public function setTradeTime($tradeTime)
    {
        $this->tradeTime = $tradeTime;
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
     * @return BankAccountQueryComplaintV10Request
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
     * @return BankAccountQueryComplaintV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bank_account_query_complaint_v1_0';
    }


}
