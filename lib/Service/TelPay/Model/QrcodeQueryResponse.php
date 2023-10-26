<?php


namespace Yeepay\Yop\Sdk\Service\TelPay\Model;


class QrcodeQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QrcodeQueryQueryQrCodeApiResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\TelPay\Model\QrcodeQueryQueryQrCodeApiResponseDTOResult';
    }

    /**
     * @param QrcodeQueryQueryQrCodeApiResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QrcodeQueryQueryQrCodeApiResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
