<?php


namespace Yeepay\Yop\Sdk\Service\Trade\Model;


class ReceiptDownloadResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ReceiptDownloadReceiptResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Trade\Model\ReceiptDownloadReceiptResponseDTOResult';
    }

    /**
     * @param ReceiptDownloadReceiptResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ReceiptDownloadReceiptResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
