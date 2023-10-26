<?php


namespace Yeepay\Yop\Sdk\Service\P2f\Model;


use Yeepay\Yop\Sdk\Model\Transform\BaseResponseUnMarshaller;

class CompanyFinanceSmallPaymentResponseUnMarshaller extends BaseResponseUnMarshaller
{

    /**
     * @var CompanyFinanceSmallPaymentResponseUnMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CompanyFinanceSmallPaymentResponseUnMarshaller();
    }

    /**
     * @return CompanyFinanceSmallPaymentResponseUnMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @return CompanyFinanceSmallPaymentResponse
     */
    protected function getResponseInstance()
    {
        return new CompanyFinanceSmallPaymentResponse();
    }
}

CompanyFinanceSmallPaymentResponseUnMarshaller::__init();
