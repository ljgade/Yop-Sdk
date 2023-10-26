<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopActivescanPayResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UpopActivescanPayOpenActiveScanPayResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanPayOpenActiveScanPayResponseDTOResult';
    }

    /**
     * @param UpopActivescanPayOpenActiveScanPayResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpopActivescanPayOpenActiveScanPayResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
