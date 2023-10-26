<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class RegisterSaasIndexV2Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $notifyUrl;
    /**
     * @var string
     */
    private $returnUrl;
    /**
     * @var string
     */
    private $mobile;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $idCardNo;
    /**
     * @var string
     */
    private $walletUserNo;

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
     * @return RegisterSaasIndexV2Request
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return RegisterSaasIndexV2Request
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
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
     * @return RegisterSaasIndexV2Request
     */
    public function setNotifyUrl($notifyUrl)
    {
        $this->notifyUrl = $notifyUrl;
        return $this;
    }
    /**
     * Gets returnUrl
     *
     * @return string
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * Sets returnUrl
     *
     * @param string $returnUrl
     * @return RegisterSaasIndexV2Request
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }
    /**
     * Gets mobile
     *
     * @return string
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * Sets mobile
     *
     * @param string $mobile
     * @return RegisterSaasIndexV2Request
     */
    public function setMobile($mobile)
    {
        $this->mobile = $mobile;
        return $this;
    }
    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets name
     *
     * @param string $name
     * @return RegisterSaasIndexV2Request
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets idCardNo
     *
     * @return string
     */
    public function getIdCardNo()
    {
        return $this->idCardNo;
    }

    /**
     * Sets idCardNo
     *
     * @param string $idCardNo
     * @return RegisterSaasIndexV2Request
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }
    /**
     * Gets walletUserNo
     *
     * @return string
     */
    public function getWalletUserNo()
    {
        return $this->walletUserNo;
    }

    /**
     * Sets walletUserNo
     *
     * @param string $walletUserNo
     * @return RegisterSaasIndexV2Request
     */
    public function setWalletUserNo($walletUserNo)
    {
        $this->walletUserNo = $walletUserNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'registerSaasIndexV2';
    }


}
