<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountManageAccountQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountManageAccountQueryAccountBalanceQueryResponseDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountManageAccountQueryAccountBalanceQueryResponseDtoResult';
    }

    /**
     * @param AccountManageAccountQueryAccountBalanceQueryResponseDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountManageAccountQueryAccountBalanceQueryResponseDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
