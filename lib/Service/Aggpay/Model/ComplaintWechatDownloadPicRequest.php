<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatDownloadPicRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $complaintNo;
    /**
     * @var string
     */
    private $fileType;
    /**
     * @var string
     */
    private $pictureUrl;

    /**
     * Gets complaintNo
     *
     * @return string
     */
    public function getComplaintNo()
    {
        return $this->complaintNo;
    }

    /**
     * Sets complaintNo
     *
     * @param string $complaintNo
     * @return ComplaintWechatDownloadPicRequest
     */
    public function setComplaintNo($complaintNo)
    {
        $this->complaintNo = $complaintNo;
        return $this;
    }
    /**
     * Gets fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->fileType;
    }

    /**
     * Sets fileType
     *
     * @param string $fileType
     * @return ComplaintWechatDownloadPicRequest
     */
    public function setFileType($fileType)
    {
        $this->fileType = $fileType;
        return $this;
    }
    /**
     * Gets pictureUrl
     *
     * @return string
     */
    public function getPictureUrl()
    {
        return $this->pictureUrl;
    }

    /**
     * Sets pictureUrl
     *
     * @param string $pictureUrl
     * @return ComplaintWechatDownloadPicRequest
     */
    public function setPictureUrl($pictureUrl)
    {
        $this->pictureUrl = $pictureUrl;
        return $this;
    }

    public static function getOperationId()
    {
        return 'complaintWechatDownloadPic';
    }


}
