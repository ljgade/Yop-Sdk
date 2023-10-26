<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardPayerrequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult';
    }

    /**
     * @param BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardPayerrequestOpenPayerAuthBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
