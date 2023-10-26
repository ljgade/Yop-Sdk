<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class RightsQueryRightsResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryRightsListAdapterRespDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\QueryRightsListAdapterRespDTO';
    }

    /**
     * @param QueryRightsListAdapterRespDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryRightsListAdapterRespDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
