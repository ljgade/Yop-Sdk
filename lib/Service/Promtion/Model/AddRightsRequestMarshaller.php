<?php


namespace Yeepay\Yop\Sdk\Service\Promtion\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class AddRightsRequestMarshaller implements RequestMarshaller
{
    /**
     * @var AddRightsRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AddRightsRequestMarshaller();
    }

    /**
     * @return AddRightsRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Promtion';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/promtion/add-rights';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param AddRightsRequest $request
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
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getRightsCode() != null){
            $internalRequest->addParameter('rightsCode', ObjectSerializer::sanitizeForSerialization($request->getRightsCode(), 'string'));
        }
        if($request->getStartEffectDate() != null){
            $internalRequest->addParameter('startEffectDate', ObjectSerializer::sanitizeForSerialization($request->getStartEffectDate(), 'string'));
        }
        if($request->getEndEffectDate() != null){
            $internalRequest->addParameter('endEffectDate', ObjectSerializer::sanitizeForSerialization($request->getEndEffectDate(), 'string'));
        }
        if($request->getBrandNo() != null){
            $internalRequest->addParameter('brandNo', ObjectSerializer::sanitizeForSerialization($request->getBrandNo(), 'string'));
        }
        if($request->getTitle() != null){
            $internalRequest->addParameter('title', ObjectSerializer::sanitizeForSerialization($request->getTitle(), 'string'));
        }
        if($request->getRuleDesc() != null){
            $internalRequest->addParameter('ruleDesc', ObjectSerializer::sanitizeForSerialization($request->getRuleDesc(), 'string'));
        }
        if($request->getPeriodType() != null){
            $internalRequest->addParameter('periodType', ObjectSerializer::sanitizeForSerialization($request->getPeriodType(), 'string'));
        }
        if($request->getPeriod() != null){
            $internalRequest->addParameter('period', ObjectSerializer::sanitizeForSerialization($request->getPeriod(), 'int', 'int32'));
        }
        if($request->getFrequency() != null){
            $internalRequest->addParameter('frequency', ObjectSerializer::sanitizeForSerialization($request->getFrequency(), 'int', 'int32'));
        }
        if($request->getBusinessType() != null){
            $internalRequest->addParameter('businessType', ObjectSerializer::sanitizeForSerialization($request->getBusinessType(), 'string'));
        }
        if($request->getUserNo() != null){
            $internalRequest->addParameter('userNo', ObjectSerializer::sanitizeForSerialization($request->getUserNo(), 'string'));
        }
        if($request->getProductNo() != null){
            $internalRequest->addParameter('productNo', ObjectSerializer::sanitizeForSerialization($request->getProductNo(), 'string'));
        }
        if($request->getProductName() != null){
            $internalRequest->addParameter('productName', ObjectSerializer::sanitizeForSerialization($request->getProductName(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
AddRightsRequestMarshaller::__init();
