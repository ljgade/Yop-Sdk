<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class GetShopResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopGetShopRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopGetShopRspDTO';
    }

    /**
     * @param YopGetShopRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopGetShopRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
