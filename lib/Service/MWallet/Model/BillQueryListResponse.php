<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BillQueryListResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BillListResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BillListResponseDto';
    }

    /**
     * @param BillListResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillListResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
