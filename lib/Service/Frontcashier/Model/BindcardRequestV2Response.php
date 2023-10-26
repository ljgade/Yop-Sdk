<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardRequestV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindcardRequestV2OpenAuthBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardRequestV2OpenAuthBindCardResponseDTOResult';
    }

    /**
     * @param BindcardRequestV2OpenAuthBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardRequestV2OpenAuthBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
