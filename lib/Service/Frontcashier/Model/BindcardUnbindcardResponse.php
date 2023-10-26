<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardUnbindcardResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindcardUnbindcardUnBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardUnbindcardUnBindCardResponseDTOResult';
    }

    /**
     * @param BindcardUnbindcardUnBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardUnbindcardUnBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
