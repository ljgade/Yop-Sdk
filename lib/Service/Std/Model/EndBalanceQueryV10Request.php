<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


class EndBalanceQueryV10Request extends \Yeepay\Yop\Sdk\Model\BaseRequest
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
     * @return EndBalanceQueryV10Request
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
     * @return EndBalanceQueryV10Request
     */
    public function setMerchantNo($merchantNo)
    {
        $this->merchantNo = $merchantNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'end_balance_query_v1_0';
    }


}
