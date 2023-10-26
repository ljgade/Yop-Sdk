<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class ManageFeeQueryDeductRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $realName;
    /**
     * @var string
     */
    private $idCardNo;
    /**
     * @var string
     */
    private $registerMobile;

    /**
     * Gets realName
     *
     * @return string
     */
    public function getRealName()
    {
        return $this->realName;
    }

    /**
     * Sets realName
     *
     * @param string $realName
     * @return ManageFeeQueryDeductRequest
     */
    public function setRealName($realName)
    {
        $this->realName = $realName;
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
     * @return ManageFeeQueryDeductRequest
     */
    public function setIdCardNo($idCardNo)
    {
        $this->idCardNo = $idCardNo;
        return $this;
    }
    /**
     * Gets registerMobile
     *
     * @return string
     */
    public function getRegisterMobile()
    {
        return $this->registerMobile;
    }

    /**
     * Sets registerMobile
     *
     * @param string $registerMobile
     * @return ManageFeeQueryDeductRequest
     */
    public function setRegisterMobile($registerMobile)
    {
        $this->registerMobile = $registerMobile;
        return $this;
    }

    public static function getOperationId()
    {
        return 'manage_fee_query_deduct';
    }


}
