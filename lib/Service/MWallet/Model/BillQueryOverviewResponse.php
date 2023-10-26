<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class BillQueryOverviewResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BillOverviewResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\BillOverviewResponseDto';
    }

    /**
     * @param BillOverviewResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillOverviewResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
