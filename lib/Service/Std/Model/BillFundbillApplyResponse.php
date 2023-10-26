<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


class BillFundbillApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var BillFundbillApplyManualGenerationResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\BillFundbillApplyManualGenerationResponseDTOResult';
    }

    /**
     * @param BillFundbillApplyManualGenerationResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return BillFundbillApplyManualGenerationResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
