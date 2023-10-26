<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class Web3AgreementNotifyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantUserNo;
    /**
     * @var string
     */
    private $operateTime;
    /**
     * @var string
     */
    private $operateType;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $endTime;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $merchantNo;

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
     * @return Web3AgreementNotifyRequest
     */
    public function setMerchantUserNo($merchantUserNo)
    {
        $this->merchantUserNo = $merchantUserNo;
        return $this;
    }
    /**
     * Gets operateTime
     *
     * @return string
     */
    public function getOperateTime()
    {
        return $this->operateTime;
    }

    /**
     * Sets operateTime
     *
     * @param string $operateTime
     * @return Web3AgreementNotifyRequest
     */
    public function setOperateTime($operateTime)
    {
        $this->operateTime = $operateTime;
        return $this;
    }
    /**
     * Gets operateType
     *
     * @return string
     */
    public function getOperateType()
    {
        return $this->operateType;
    }

    /**
     * Sets operateType
     *
     * @param string $operateType
     * @return Web3AgreementNotifyRequest
     */
    public function setOperateType($operateType)
    {
        $this->operateType = $operateType;
        return $this;
    }
    /**
     * Gets notifyUrl
     *
     * @return string
     */
    public function getNotifyUrl()
    {
        return $this->notifyUrl;
    }

    /**
     * Sets notifyUrl
     *
     * @param string $notifyUrl
     * @return Web3AgreementNotifyRequest
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
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
     * @return Web3AgreementNotifyRequest
     */
    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
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
     * @return Web3AgreementNotifyRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return Web3AgreementNotifyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'web3AgreementNotify';
    }


}
