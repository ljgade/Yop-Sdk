<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class QueryShopBindListResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopQueryShopBindRspDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopQueryShopBindRspDto';
    }

    /**
     * @param YopQueryShopBindRspDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopQueryShopBindRspDto
     */
    function getResult()
    {
        return $this->result;
    }
}
