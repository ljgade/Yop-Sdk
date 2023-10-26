<?php


namespace Yeepay\Yop\Sdk\Service\Yop\Model;


class Oauth2ReportKeyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var Oauth2ReportKeyHandshakeResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Yop\Model\Oauth2ReportKeyHandshakeResponseResult';
    }

    /**
     * @param Oauth2ReportKeyHandshakeResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return Oauth2ReportKeyHandshakeResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
