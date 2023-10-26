<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


class EndBalanceQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $date;
    /**
     * @var string
     */
    private $merchantNo;

    /**
     * Gets date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets date
     *
     * @param string $date
     * @return EndBalanceQueryRequest
     */
    public function setDate($date)
    {
        $this->date = $date;
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
     * @return EndBalanceQueryRequest
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'endBalanceQuery';
    }


}
