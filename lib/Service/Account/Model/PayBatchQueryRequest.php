<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PayBatchQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $batchNo;

    /**
     * Gets batchNo
     *
     * @return string
     */
    public function getBatchNo()
    {
        return $this->batchNo;
    }

    /**
     * Sets batchNo
     *
     * @param string $batchNo
     * @return PayBatchQueryRequest
     */
    public function setBatchNo($batchNo)
    {
        $this->batchNo = $batchNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'payBatchQuery';
    }


}
