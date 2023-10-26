<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


class ComplaintWechatSuccessRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $complaintNo;

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
     * @return ComplaintWechatSuccessRequest
     */
    public function setComplaintNo($complaintNo)
    {
        $this->complaintNo = $complaintNo;
        return $this;
    }

    public static function getOperationId()
    {
        return 'complaintWechatSuccess';
    }


}
