<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


class PointOperateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var PointOperatePointAccountOperateResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Promtion\Model\PointOperatePointAccountOperateResponseDTOResult';
    }

    /**
     * @param PointOperatePointAccountOperateResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return PointOperatePointAccountOperateResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
