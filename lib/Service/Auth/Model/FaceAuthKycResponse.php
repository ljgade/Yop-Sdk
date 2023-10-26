<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


class FaceAuthKycResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FaceAuthKycFaceAuthResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycFaceAuthResponseDTOResult';
    }

    /**
     * @param FaceAuthKycFaceAuthResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FaceAuthKycFaceAuthResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
