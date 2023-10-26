<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class SubsidyBackQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var SubsidyBackQueryYopQuerySubsidyBackResDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\SubsidyBackQueryYopQuerySubsidyBackResDTOResult';
    }

    /**
     * @param SubsidyBackQueryYopQuerySubsidyBackResDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return SubsidyBackQueryYopQuerySubsidyBackResDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
