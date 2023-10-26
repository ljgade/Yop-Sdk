<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


class UpopActivescanQuerypayresultResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Frontcashier\Model\UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult';
    }

    /**
     * @param UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return UpopActivescanQuerypayresultOpenQueryActiveScanPayResultResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
