<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


class FileUploadResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var FileUploadCustFileUploadResponseDTOResult
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\P2f\Model\FileUploadCustFileUploadResponseDTOResult';
    }

    /**
     * @param FileUploadCustFileUploadResponseDTOResult $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return FileUploadCustFileUploadResponseDTOResult
     */
    function getResult()
    {
        return $this->result;
    }
}
