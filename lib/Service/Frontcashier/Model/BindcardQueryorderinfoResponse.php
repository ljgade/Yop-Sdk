<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardQueryorderinfoResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindcardQueryorderinfoOpenQueryOrderInfoResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardQueryorderinfoOpenQueryOrderInfoResponseDTOResult';
    }

    /**
     * @param BindcardQueryorderinfoOpenQueryOrderInfoResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardQueryorderinfoOpenQueryOrderInfoResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
