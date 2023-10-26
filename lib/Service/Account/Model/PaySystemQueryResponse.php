<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class PaySystemQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PaySystemQueryRemitOrderQueryRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\PaySystemQueryRemitOrderQueryRespDTOResult';
    }

    /**
     * @param PaySystemQueryRemitOrderQueryRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PaySystemQueryRemitOrderQueryRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
