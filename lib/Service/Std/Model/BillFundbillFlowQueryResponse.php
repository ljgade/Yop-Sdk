<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillFundbillFlowQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult';
    }

    /**
     * @param BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillFundbillFlowQueryYopQueryFundBillFlowResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
