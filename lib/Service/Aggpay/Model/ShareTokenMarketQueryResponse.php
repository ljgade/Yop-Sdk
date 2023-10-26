<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ShareTokenMarketQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ShareTokenMarketQueryAliMarketQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Aggpay\Model\ShareTokenMarketQueryAliMarketQueryResponseDTOResult';
    }

    /**
     * @param ShareTokenMarketQueryAliMarketQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ShareTokenMarketQueryAliMarketQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
