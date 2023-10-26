<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ShareTokenGenerateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ShareTokenGenerateAliShareTokenResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ShareTokenGenerateAliShareTokenResponseDTOResult';
    }

    /**
     * @param ShareTokenGenerateAliShareTokenResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ShareTokenGenerateAliShareTokenResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
