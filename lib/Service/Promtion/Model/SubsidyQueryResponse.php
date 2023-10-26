<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class SubsidyQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SubsidyQueryYopQuerySubsidyResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyQueryYopQuerySubsidyResDTOResult';
    }

    /**
     * @param SubsidyQueryYopQuerySubsidyResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SubsidyQueryYopQuerySubsidyResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
