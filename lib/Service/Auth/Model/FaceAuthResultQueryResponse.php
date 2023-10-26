<?php


namespace Yeepay\Yop\Sdk\Service\Auth\Model;


class FaceAuthResultQueryResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FaceAuthResultQueryFaceAuthResultQueryResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Auth\Model\FaceAuthResultQueryFaceAuthResultQueryResponseDTOResult';
    }

    /**
     * @param FaceAuthResultQueryFaceAuthResultQueryResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FaceAuthResultQueryFaceAuthResultQueryResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
