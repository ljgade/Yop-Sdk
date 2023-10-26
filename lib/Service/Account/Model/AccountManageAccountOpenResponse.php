<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageAccountOpenResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountManageAccountOpenAccountBookCreateResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountOpenAccountBookCreateResponseDtoResult';
    }

    /**
     * @param AccountManageAccountOpenAccountBookCreateResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountManageAccountOpenAccountBookCreateResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
