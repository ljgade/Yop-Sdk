<?php


namespace Yeepay\Yop\Sdk\Service\TelPay\Model;


class QrcodeBatchGenerateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\TelPay\Model\QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult';
    }

    /**
     * @param QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QrcodeBatchGenerateBatchGenerateQrCodeResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
