<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopActivescanQuerycouponResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UpopActivescanQuerycouponOpenQueryCouponInfoResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerycouponOpenQueryCouponInfoResponseDTOResult';
    }

    /**
     * @param UpopActivescanQuerycouponOpenQueryCouponInfoResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpopActivescanQuerycouponOpenQueryCouponInfoResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
