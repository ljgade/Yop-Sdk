<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


class AuthStateQueryV2Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var AuthStateQueryV2IdentityAuthStateResDtoResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Mer\Model\AuthStateQueryV2IdentityAuthStateResDtoResult';
    }

    /**
     * @param AuthStateQueryV2IdentityAuthStateResDtoResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return AuthStateQueryV2IdentityAuthStateResDtoResult
     */
    function getResult()
    {
        return $this->result;
    }
}
