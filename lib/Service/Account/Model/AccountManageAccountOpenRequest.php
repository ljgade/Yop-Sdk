<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageAccountOpenRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
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
    private $merchantAccountBookNo;
    /**
     * @var string
     */
    private $merchantAccountBookName;

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
     * @return AccountManageAccountOpenRequest
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
     * @return AccountManageAccountOpenRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets merchantAccountBookNo
     *
     * @return string
     */
    public function getMerchantAccountBookNo()
    {
        return $this->merchantAccountBookNo;
    }

    /**
     * Sets merchantAccountBookNo
     *
     * @param string $merchantAccountBookNo
     * @return AccountManageAccountOpenRequest
     */
    public function setMerchantAccountBookNo($merchantAccountBookNo)
    {
        $this->merchantAccountBookNo = $merchantAccountBookNo;
        return $this;
    }
    /**
     * Gets merchantAccountBookName
     *
     * @return string
     */
    public function getMerchantAccountBookName()
    {
        return $this->merchantAccountBookName;
    }

    /**
     * Sets merchantAccountBookName
     *
     * @param string $merchantAccountBookName
     * @return AccountManageAccountOpenRequest
     */
    public function setMerchantAccountBookName($merchantAccountBookName)
    {
        $this->merchantAccountBookName = $merchantAccountBookName;
        return $this;
    }

    public static function getOperationId()
    {
        return 'accountManageAccountOpen';
    }


}
