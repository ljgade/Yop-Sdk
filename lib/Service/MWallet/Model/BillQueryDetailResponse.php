<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BillQueryDetailResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BillDetailResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BillDetailResponseDto';
    }

    /**
     * @param BillDetailResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillDetailResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
