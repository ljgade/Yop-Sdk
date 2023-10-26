<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BankAccountQueryTradeV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
    private $beginDate;
    /**
     * @var string
     */
    private $endDate;
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
    private $loanFlag;
    /**
     * @var int
     */
    private $startNum;
    /**
     * @var int
     */
    private $queryNum;
    /**
     * @var string
     */
    private $queryToken;
    /**
     * @var string
     */
    private $queryTime;

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
     * @return BankAccountQueryTradeV10Request
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
     * @return BankAccountQueryTradeV10Request
     */
    public function setAccountNo($accountNo)
    {
        $this->accountNo = $accountNo;
        return $this;
    }
    /**
     * Gets beginDate
     *
     * @return string
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Sets beginDate
     *
     * @param string $beginDate
     * @return BankAccountQueryTradeV10Request
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;
        return $this;
    }
    /**
     * Gets endDate
     *
     * @return string
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Sets endDate
     *
     * @param string $endDate
     * @return BankAccountQueryTradeV10Request
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
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
     * @return BankAccountQueryTradeV10Request
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
     * @return BankAccountQueryTradeV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets loanFlag
     *
     * @return string
     */
    public function getLoanFlag()
    {
        return $this->loanFlag;
    }

    /**
     * Sets loanFlag
     *
     * @param string $loanFlag
     * @return BankAccountQueryTradeV10Request
     */
    public function setLoanFlag($loanFlag)
    {
        $this->loanFlag = $loanFlag;
        return $this;
    }
    /**
     * Gets startNum
     *
     * @return int
     */
    public function getStartNum()
    {
        return $this->startNum;
    }

    /**
     * Sets startNum
     *
     * @param int $startNum
     * @return BankAccountQueryTradeV10Request
     */
    public function setStartNum($startNum)
    {
        $this->startNum = $startNum;
        return $this;
    }
    /**
     * Gets queryNum
     *
     * @return int
     */
    public function getQueryNum()
    {
        return $this->queryNum;
    }

    /**
     * Sets queryNum
     *
     * @param int $queryNum
     * @return BankAccountQueryTradeV10Request
     */
    public function setQueryNum($queryNum)
    {
        $this->queryNum = $queryNum;
        return $this;
    }
    /**
     * Gets queryToken
     *
     * @return string
     */
    public function getQueryToken()
    {
        return $this->queryToken;
    }

    /**
     * Sets queryToken
     *
     * @param string $queryToken
     * @return BankAccountQueryTradeV10Request
     */
    public function setQueryToken($queryToken)
    {
        $this->queryToken = $queryToken;
        return $this;
    }
    /**
     * Gets queryTime
     *
     * @return string
     */
    public function getQueryTime()
    {
        return $this->queryTime;
    }

    /**
     * Sets queryTime
     *
     * @param string $queryTime
     * @return BankAccountQueryTradeV10Request
     */
    public function setQueryTime($queryTime)
    {
        $this->queryTime = $queryTime;
        return $this;
    }

    public static function getOperationId()
    {
        return 'bank_account_query_trade_v1_0';
    }


}
