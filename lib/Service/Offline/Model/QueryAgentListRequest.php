<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class QueryAgentListRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $agentMerchantNo;
    /**
     * @var string
     */
    private $parentMerchantNo;
    /**
     * @var string
     */
    private $terminalNo;
    /**
     * @var string
     */
    private $serialNo;

    /**
     * Gets agentMerchantNo
     *
     * @return string
     */
    public function getAgentMerchantNo()
    {
        return $this->agentMerchantNo;
    }

    /**
     * Sets agentMerchantNo
     *
     * @param string $agentMerchantNo
     * @return QueryAgentListRequest
     */
    public function setAgentMerchantNo($agentMerchantNo)
    {
        $this->agentMerchantNo = $agentMerchantNo;
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
     * @return QueryAgentListRequest
     */
    public function setParentMerchantNo($parentMerchantNo)
    {
        $this->parentMerchantNo = $parentMerchantNo;
        return $this;
    }
    /**
     * Gets terminalNo
     *
     * @return string
     */
    public function getTerminalNo()
    {
        return $this->terminalNo;
    }

    /**
     * Sets terminalNo
     *
     * @param string $terminalNo
     * @return QueryAgentListRequest
     */
    public function setTerminalNo($terminalNo)
    {
        $this->terminalNo = $terminalNo;
        return $this;
    }
    /**
     * Gets serialNo
     *
     * @return string
     */
    public function getSerialNo()
    {
        return $this->serialNo;
    }

    /**
     * Sets serialNo
     *
     * @param string $serialNo
     * @return QueryAgentListRequest
     */
    public function setSerialNo($serialNo)
    {
        $this->serialNo = $serialNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'queryAgentList';
    }


}
