<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class RefundReceiptDownloadResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RefundReceiptDownloadReceiptResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\RefundReceiptDownloadReceiptResponseDTOResult';
    }

    /**
     * @param RefundReceiptDownloadReceiptResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RefundReceiptDownloadReceiptResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
