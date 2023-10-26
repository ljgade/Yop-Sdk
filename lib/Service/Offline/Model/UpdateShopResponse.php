<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class UpdateShopResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopBaseRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopBaseRspDTO';
    }

    /**
     * @param YopBaseRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopBaseRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
