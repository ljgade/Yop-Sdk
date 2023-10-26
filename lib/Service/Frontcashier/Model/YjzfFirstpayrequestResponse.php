<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class YjzfFirstpayrequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult';
    }

    /**
     * @param YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YjzfFirstpayrequestAPIYJZFFirstPaymentResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
