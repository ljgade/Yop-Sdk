<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class CreateShopResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopCreateShopRspDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopCreateShopRspDTO';
    }

    /**
     * @param YopCreateShopRspDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopCreateShopRspDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
