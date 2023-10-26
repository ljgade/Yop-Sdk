<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountIndividualApplyRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $certificateType;
    /**
     * @var string
     */
    private $certificateNo;
    /**
     * @var string
     */
    private $phone;
    /**
     * @var string
     */
    private $frontUrl;
    /**
     * @var string
     */
    private $contraryUrl;

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
     * @return AccountIndividualApplyRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
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
     * @return AccountIndividualApplyRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
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
     * @return AccountIndividualApplyRequest
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * Gets certificateType
     *
     * @return string
     */
    public function getCertificateType()
    {
        return $this->certificateType;
    }

    /**
     * Sets certificateType
     *
     * @param string $certificateType
     * @return AccountIndividualApplyRequest
     */
    public function setCertificateType($certificateType)
    {
        $this->certificateType = $certificateType;
        return $this;
    }
    /**
     * Gets certificateNo
     *
     * @return string
     */
    public function getCertificateNo()
    {
        return $this->certificateNo;
    }

    /**
     * Sets certificateNo
     *
     * @param string $certificateNo
     * @return AccountIndividualApplyRequest
     */
    public function setCertificateNo($certificateNo)
    {
        $this->certificateNo = $certificateNo;
        return $this;
    }
    /**
     * Gets phone
     *
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * Sets phone
     *
     * @param string $phone
     * @return AccountIndividualApplyRequest
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }
    /**
     * Gets frontUrl
     *
     * @return string
     */
    public function getFrontUrl()
    {
        return $this->frontUrl;
    }

    /**
     * Sets frontUrl
     *
     * @param string $frontUrl
     * @return AccountIndividualApplyRequest
     */
    public function setFrontUrl($frontUrl)
    {
        $this->frontUrl = $frontUrl;
        return $this;
    }
    /**
     * Gets contraryUrl
     *
     * @return string
     */
    public function getContraryUrl()
    {
        return $this->contraryUrl;
    }

    /**
     * Sets contraryUrl
     *
     * @param string $contraryUrl
     * @return AccountIndividualApplyRequest
     */
    public function setContraryUrl($contraryUrl)
    {
        $this->contraryUrl = $contraryUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'account_individual_apply';
    }


}
