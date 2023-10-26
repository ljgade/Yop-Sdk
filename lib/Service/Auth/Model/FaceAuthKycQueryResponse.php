<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


class FaceAuthKycQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult';
    }

    /**
     * @param FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FaceAuthKycQueryFaceAuthResultQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
