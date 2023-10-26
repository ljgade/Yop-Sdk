<?php


namespace Yeepay\Yop\Sdk\Service\Netpay\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class OrderRequestMarshaller implements RequestMarshaller
{
    /**
     * @var OrderRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new OrderRequestMarshaller();
    }

    /**
     * @return OrderRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Netpay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/netpay/order';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param OrderRequest $request
     * @return Request
     */
    public function marshal($request)
    {
        $internalRequest = new DefaultRequest($this->serviceName);
        $internalRequest->setResourcePath($this->resourcePath);
        $internalRequest->setHttpMethod($this->httpMethod);
        if (!empty($request->getRequestConfig()) && !empty($request->getRequestConfig()->getCustomRequestHeaders())) {
            foreach ($request->getRequestConfig()->getCustomRequestHeaders() as $name => $value) {
                $internalRequest->addHeader($name, $value);
            }
        }
        if (!isset($internalRequest->getHeaders()[Headers::YOP_REQUEST_ID])) {
            $internalRequest->addHeader(Headers::YOP_REQUEST_ID, UUIDUtils::uuid());
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getOrderId() != null){
            $internalRequest->addParameter('orderId', ObjectSerializer::sanitizeForSerialization($request->getOrderId(), 'string'));
        }
        if($request->getOrderAmount() != null){
            $internalRequest->addParameter('orderAmount', ObjectSerializer::sanitizeForSerialization($request->getOrderAmount(), 'float'));
        }
        if($request->getExpiredTime() != null){
            $internalRequest->addParameter('expiredTime', ObjectSerializer::sanitizeForSerialization($request->getExpiredTime(), 'string', 'date-time'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string'));
        }
        if($request->getMemo() != null){
            $internalRequest->addParameter('memo', ObjectSerializer::sanitizeForSerialization($request->getMemo(), 'string'));
        }
        if($request->getGoodsName() != null){
            $internalRequest->addParameter('goodsName', ObjectSerializer::sanitizeForSerialization($request->getGoodsName(), 'string'));
        }
        if($request->getFundProcessType() != null){
            $internalRequest->addParameter('fundProcessType', ObjectSerializer::sanitizeForSerialization($request->getFundProcessType(), 'string'));
        }
        if($request->getCardType() != null){
            $internalRequest->addParameter('cardType', ObjectSerializer::sanitizeForSerialization($request->getCardType(), 'string'));
        }
        if($request->getBankAccountType() != null){
            $internalRequest->addParameter('bankAccountType', ObjectSerializer::sanitizeForSerialization($request->getBankAccountType(), 'string'));
        }
        if($request->getBankCode() != null){
            $internalRequest->addParameter('bankCode', ObjectSerializer::sanitizeForSerialization($request->getBankCode(), 'string'));
        }
        if($request->getTerminalType() != null){
            $internalRequest->addParameter('terminalType', ObjectSerializer::sanitizeForSerialization($request->getTerminalType(), 'string'));
        }
        if($request->getPayerIp() != null){
            $internalRequest->addParameter('payerIp', ObjectSerializer::sanitizeForSerialization($request->getPayerIp(), 'string'));
        }
        if($request->getCsNotifyUrl() != null){
            $internalRequest->addParameter('csNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getCsNotifyUrl(), 'string'));
        }
        if($request->getBusinessInfo() != null){
            $internalRequest->addParameter('businessInfo', ObjectSerializer::sanitizeForSerialization($request->getBusinessInfo(), 'string'));
        }
        if($request->getReturnUrl() != null){
            $internalRequest->addParameter('returnUrl', ObjectSerializer::sanitizeForSerialization($request->getReturnUrl(), 'string', 'url'));
        }
        if($request->getOrderType() != null){
            $internalRequest->addParameter('orderType', ObjectSerializer::sanitizeForSerialization($request->getOrderType(), 'string'));
        }
        if($request->getPayerAccountName() != null){
            $internalRequest->addParameter('payerAccountName', ObjectSerializer::sanitizeForSerialization($request->getPayerAccountName(), 'string'));
        }
        if($request->getPayerAccountNo() != null){
            $internalRequest->addParameter('payerAccountNo', ObjectSerializer::sanitizeForSerialization($request->getPayerAccountNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
OrderRequestMarshaller::__init();
