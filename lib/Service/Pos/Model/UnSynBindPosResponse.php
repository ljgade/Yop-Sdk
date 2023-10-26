<?php


namespace Yeepay\Yop\Sdk\Service\Pos\Model;


class UnSynBindPosResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var stringstring
     */
    private $result;

    function getResultClass()
    {
        return 'string';
    }

    /**
     * @param stringstring $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return stringstring
     */
    function getResult()
    {
        return $this->result;
    }
}
