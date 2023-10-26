<?php


namespace Yeepay\Yop\Sdk\Service\SupplierRemit\Model;


class BillDownloadRequest extends \Yeepay\Yop\Sdk\Model\BaseRequest
{
    /**
     * @var string
     */
    private $remitDate;

    /**
     * Gets remitDate
     *
     * @return string
     */
    public function getRemitDate()
    {
        return $this->remitDate;
    }

    /**
     * Sets remitDate
     *
     * @param string $remitDate
     * @return BillDownloadRequest
     */
    public function setRemitDate($remitDate)
    {
        $this->remitDate = $remitDate;
        return $this;
    }

    public static function getOperationId()
    {
        return 'billDownload';
    }


}
