<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class CreateRightsQrcodeAdapterResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CreateRightsQrCodeAdapterRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\CreateRightsQrCodeAdapterRespDTO';
    }

    /**
     * @param CreateRightsQrCodeAdapterRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CreateRightsQrCodeAdapterRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
