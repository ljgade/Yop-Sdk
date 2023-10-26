<?php


namespace Yeepay\Yop\Sdk\Service\Sys\Model;


class MerchantQualUploadRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var Resource
     */
    private $merQual;

    /**
     * Gets merQual
     *
     * @return Resource
     */
    public function getMerQual()
    {
        return $this->merQual;
    }

    /**
     * Sets merQual
     *
     * @param Resource $merQual
     * @return MerchantQualUploadRequest
     */
    public function setMerQual($merQual)
    {
        $this->merQual = $merQual;
        return $this;
    }

    public static function getOperationId()
    {
        return 'merchantQualUpload';
    }


}
