<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ExternalOrderRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ExternalOrderRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ExternalOrderRequestMarshaller();
    }

    /**
     * @return ExternalOrderRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Account';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/account/external/order';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ExternalOrderRequest $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getChannelName() != null){
            $internalRequest->addParameter('channelName', ObjectSerializer::sanitizeForSerialization($request->getChannelName(), 'string'));
        }
        if($request->getOrderId() != null){
            $internalRequest->addParameter('orderId', ObjectSerializer::sanitizeForSerialization($request->getOrderId(), 'string'));
        }
        if($request->getMerchantName() != null){
            $internalRequest->addParameter('merchantName', ObjectSerializer::sanitizeForSerialization($request->getMerchantName(), 'string'));
        }
        if($request->getGoodsName() != null){
            $internalRequest->addParameter('goodsName', ObjectSerializer::sanitizeForSerialization($request->getGoodsName(), 'string'));
        }
        if($request->getTrxDate() != null){
            $internalRequest->addParameter('trxDate', ObjectSerializer::sanitizeForSerialization($request->getTrxDate(), 'string'));
        }
        if($request->getFinishDate() != null){
            $internalRequest->addParameter('finishDate', ObjectSerializer::sanitizeForSerialization($request->getFinishDate(), 'string'));
        }
        if($request->getOrderAmount() != null){
            $internalRequest->addParameter('orderAmount', ObjectSerializer::sanitizeForSerialization($request->getOrderAmount(), 'float'));
        }
        if($request->getRealAmount() != null){
            $internalRequest->addParameter('realAmount', ObjectSerializer::sanitizeForSerialization($request->getRealAmount(), 'float'));
        }
        if($request->getPayerUserId() != null){
            $internalRequest->addParameter('payerUserId', ObjectSerializer::sanitizeForSerialization($request->getPayerUserId(), 'string'));
        }
        if($request->getPayWay() != null){
            $internalRequest->addParameter('payWay', ObjectSerializer::sanitizeForSerialization($request->getPayWay(), 'string'));
        }
        if($request->getPayCardNo() != null){
            $internalRequest->addParameter('payCardNo', ObjectSerializer::sanitizeForSerialization($request->getPayCardNo(), 'string'));
        }
        if($request->getPayCardType() != null){
            $internalRequest->addParameter('payCardType', ObjectSerializer::sanitizeForSerialization($request->getPayCardType(), 'string'));
        }
        if($request->getUserRequestIp() != null){
            $internalRequest->addParameter('userRequestIp', ObjectSerializer::sanitizeForSerialization($request->getUserRequestIp(), 'string'));
        }
        if($request->getTrxType() != null){
            $internalRequest->addParameter('trxType', ObjectSerializer::sanitizeForSerialization($request->getTrxType(), 'string'));
        }
        if($request->getBatchNo() != null){
            $internalRequest->addParameter('batchNo', ObjectSerializer::sanitizeForSerialization($request->getBatchNo(), 'string'));
        }
        if($request->getChannelExtInfo() != null){
            $internalRequest->addParameter('channelExtInfo', ObjectSerializer::sanitizeForSerialization($request->getChannelExtInfo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ExternalOrderRequestMarshaller::__init();
