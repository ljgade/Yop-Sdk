<?php


namespace Yeepay\Yop\Sdk\Service\Frontcashier\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class UpopActivescanQuerycouponRequestMarshaller implements RequestMarshaller
{
    /**
     * @var UpopActivescanQuerycouponRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new UpopActivescanQuerycouponRequestMarshaller();
    }

    /**
     * @return UpopActivescanQuerycouponRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Frontcashier';

    /**
     * @var string
     */
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/frontcashier/upop/activescan/querycoupon';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param UpopActivescanQuerycouponRequest $request
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
        if($request->getMerchantFlowId() != null){
            $internalRequest->addParameter('merchantFlowId', ObjectSerializer::sanitizeForSerialization($request->getMerchantFlowId(), 'string'));
        }
        if($request->getPaySerialNo() != null){
            $internalRequest->addParameter('paySerialNo', ObjectSerializer::sanitizeForSerialization($request->getPaySerialNo(), 'string'));
        }
        if($request->getTradeAmount() != null){
            $internalRequest->addParameter('tradeAmount', ObjectSerializer::sanitizeForSerialization($request->getTradeAmount(), 'float'));
        }
        if($request->getBindId() != null){
            $internalRequest->addParameter('bindId', ObjectSerializer::sanitizeForSerialization($request->getBindId(), 'int', 'int64'));
        }
        if($request->getUserNo() != null){
            $internalRequest->addParameter('userNo', ObjectSerializer::sanitizeForSerialization($request->getUserNo(), 'string'));
        }
        if($request->getUserType() != null){
            $internalRequest->addParameter('userType', ObjectSerializer::sanitizeForSerialization($request->getUserType(), 'string'));
        }
        if($request->getRiskInfoDeviceID() != null){
            $internalRequest->addParameter('riskInfoDeviceID', ObjectSerializer::sanitizeForSerialization($request->getRiskInfoDeviceID(), 'string'));
        }
        if($request->getRiskInfoDeviceType() != null){
            $internalRequest->addParameter('riskInfoDeviceType', ObjectSerializer::sanitizeForSerialization($request->getRiskInfoDeviceType(), 'string'));
        }
        if($request->getRiskInfoAccountIDHash() != null){
            $internalRequest->addParameter('riskInfoAccountIDHash', ObjectSerializer::sanitizeForSerialization($request->getRiskInfoAccountIDHash(), 'string'));
        }
        if($request->getRiskInfoSourceIP() != null){
            $internalRequest->addParameter('riskInfoSourceIP', ObjectSerializer::sanitizeForSerialization($request->getRiskInfoSourceIP(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
UpopActivescanQuerycouponRequestMarshaller::__init();
