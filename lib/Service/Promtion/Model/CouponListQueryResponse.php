<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class CouponListQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CouponListQueryCouponPageListQueryResponseResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\CouponListQueryCouponPageListQueryResponseResult';
    }

    /**
     * @param CouponListQueryCouponPageListQueryResponseResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CouponListQueryCouponPageListQueryResponseResult
     */
    function getResult()
    {
        return $this->result;
    }
}
