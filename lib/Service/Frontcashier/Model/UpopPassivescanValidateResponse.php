<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopPassivescanValidateResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UpopPassivescanValidateOpenPassiveValidateResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopPassivescanValidateOpenPassiveValidateResponseDTOResult';
    }

    /**
     * @param UpopPassivescanValidateOpenPassiveValidateResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpopPassivescanValidateOpenPassiveValidateResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
