<?php


namespace Yeepay\Yop\Sdk\Service\Invoice\Model;


class InfoModifyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var InfoModifyAddOrModifyInvoiceInfoResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Invoice\Model\InfoModifyAddOrModifyInvoiceInfoResponseDtoResult';
    }

    /**
     * @param InfoModifyAddOrModifyInvoiceInfoResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return InfoModifyAddOrModifyInvoiceInfoResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
