<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class BindcardResendsmsV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BindcardResendsmsV2OpenAuthBindCardSmsResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\BindcardResendsmsV2OpenAuthBindCardSmsResponseDTOResult';
    }

    /**
     * @param BindcardResendsmsV2OpenAuthBindCardSmsResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BindcardResendsmsV2OpenAuthBindCardSmsResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
