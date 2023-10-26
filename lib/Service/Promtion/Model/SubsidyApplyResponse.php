<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class SubsidyApplyResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SubsidyApplyYopSubsidyResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyApplyYopSubsidyResDTOResult';
    }

    /**
     * @param SubsidyApplyYopSubsidyResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SubsidyApplyYopSubsidyResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
