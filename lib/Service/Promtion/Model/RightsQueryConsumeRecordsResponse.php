<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class RightsQueryConsumeRecordsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryRightsConsumeAdapterRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\QueryRightsConsumeAdapterRespDTO';
    }

    /**
     * @param QueryRightsConsumeAdapterRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryRightsConsumeAdapterRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
