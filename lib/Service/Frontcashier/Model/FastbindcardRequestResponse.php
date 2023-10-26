<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class FastbindcardRequestResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult';
    }

    /**
     * @param FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FastbindcardRequestOpenNetsUnionAuthBindCardResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
