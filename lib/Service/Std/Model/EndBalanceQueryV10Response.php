<?php


namespace Yeepay\Yop\Sdk\Service\Std\Model;


class EndBalanceQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryBalanceResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Std\Model\YopQueryBalanceResponseDTO';
    }

    /**
     * @param YopQueryBalanceResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryBalanceResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
