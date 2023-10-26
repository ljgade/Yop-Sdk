<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class CouponApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CouponApplyCouponApplyResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\CouponApplyCouponApplyResponseResult';
    }

    /**
     * @param CouponApplyCouponApplyResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CouponApplyCouponApplyResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
