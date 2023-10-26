<?php


namespace Yeepay\Yop\Sdk\Service\Nccashierapi\Model;


class ApiPayResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var ApiPayUnifiedAPICashierResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Nccashierapi\Model\ApiPayUnifiedAPICashierResponseDTOResult';
    }

    /**
     * @param ApiPayUnifiedAPICashierResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return ApiPayUnifiedAPICashierResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
