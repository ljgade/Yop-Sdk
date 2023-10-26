<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class RechargeInitiateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var RequestURLResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\RequestURLResponseDTO';
    }

    /**
     * @param RequestURLResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return RequestURLResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
