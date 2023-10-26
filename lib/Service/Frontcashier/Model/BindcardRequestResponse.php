<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardRequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindcardRequestOpenAuthBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestOpenAuthBindCardResponseDTOResult';
    }

    /**
     * @param BindcardRequestOpenAuthBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardRequestOpenAuthBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
