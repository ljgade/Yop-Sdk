<?php


namespace Yeepay\Yop\Sdk\Service\AtVcc\Model;


class UnionPayOrderQueryRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $requestNo;
    /**
     * @var string
     */
    private $customerNo;
    /**
     * @var array|string
     */
    private $transactionTypeList;
    /**
     * @var string
     */
    private $accessChannel;

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
     * @return UnionPayOrderQueryRequest
     */
    public function setRequestNo($requestNo)
    {
        $this->requestNo = $requestNo;
        return $this;
    }
    /**
     * Gets customerNo
     *
     * @return string
     */
    public function getCustomerNo()
    {
        return $this->customerNo;
    }

    /**
     * Sets customerNo
     *
     * @param string $customerNo
     * @return UnionPayOrderQueryRequest
     */
    public function setCustomerNo($customerNo)
    {
        $this->customerNo = $customerNo;
        return $this;
    }
    /**
     * Gets transactionTypeList
     *
     * @return array|string
     */
    public function getTransactionTypeList()
    {
        return $this->transactionTypeList;
    }

    /**
     * Sets transactionTypeList
     *
     * @param array|string $transactionTypeList
     * @return UnionPayOrderQueryRequest
     */
    public function setTransactionTypeList($transactionTypeList)
    {
        $this->transactionTypeList = $transactionTypeList;
        return $this;
    }
    /**
     * Gets accessChannel
     *
     * @return string
     */
    public function getAccessChannel()
    {
        return $this->accessChannel;
    }

    /**
     * Sets accessChannel
     *
     * @param string $accessChannel
     * @return UnionPayOrderQueryRequest
     */
    public function setAccessChannel($accessChannel)
    {
        $this->accessChannel = $accessChannel;
        return $this;
    }

    public static function getOperationId()
    {
        return 'unionPayOrderQuery';
    }


}
