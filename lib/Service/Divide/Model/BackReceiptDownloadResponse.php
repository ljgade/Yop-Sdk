<?php


namespace Yeepay\Yop\Sdk\Service\Divide\Model;


class BackReceiptDownloadResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BackReceiptDownloadReceiptResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Divide\Model\BackReceiptDownloadReceiptResponseDTOResult';
    }

    /**
     * @param BackReceiptDownloadReceiptResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BackReceiptDownloadReceiptResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
