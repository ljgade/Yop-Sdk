<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class RightsTransferRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $merchantNo;
    /**
     * @var string
     */
    private $userNo;
    /**
     * @var string
     */
    private $productNo;

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
     * @return RightsTransferRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }
    /**
     * Gets userNo
     *
     * @return string
     */
    public function getUserNo()
    {
        return $this->userNo;
    }

    /**
     * Sets userNo
     *
     * @param string $userNo
     * @return RightsTransferRequest
     */
    public function setUserNo($userNo)
    {
        $this->userNo = $userNo;
        return $this;
    }
    /**
     * Gets productNo
     *
     * @return string
     */
    public function getProductNo()
    {
        return $this->productNo;
    }

    /**
     * Sets productNo
     *
     * @param string $productNo
     * @return RightsTransferRequest
     */
    public function setProductNo($productNo)
    {
        $this->productNo = $productNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'rights_transfer';
    }


}
