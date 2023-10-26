<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class Web3CouponListQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var CouponQueryResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\CouponQueryResponseDTO';
    }

    /**
     * @param CouponQueryResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return CouponQueryResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
