<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


class AccountinfosQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AccountinfosQueryQueryAccountInfoListRespDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Account\Model\AccountinfosQueryQueryAccountInfoListRespDTOResult';
    }

    /**
     * @param AccountinfosQueryQueryAccountInfoListRespDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AccountinfosQueryQueryAccountInfoListRespDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
