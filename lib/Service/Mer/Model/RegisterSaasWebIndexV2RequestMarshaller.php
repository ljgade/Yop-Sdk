<?php


namespace Yeepay\Yop\Sdk\Service\Mer\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class RegisterSaasWebIndexV2RequestMarshaller implements RequestMarshaller
{
    /**
     * @var RegisterSaasWebIndexV2RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new RegisterSaasWebIndexV2RequestMarshaller();
    }

    /**
     * @return RegisterSaasWebIndexV2RequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Mer';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v2.0/mer/register/saas/web/index';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param RegisterSaasWebIndexV2Request $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getSignType() != null){
            $internalRequest->addParameter('signType', ObjectSerializer::sanitizeForSerialization($request->getSignType(), 'string'));
        }
        if($request->getNotifyUrl() != null){
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'url'));
        }
        if($request->getReturnUrl() != null){
            $internalRequest->addParameter('returnUrl', ObjectSerializer::sanitizeForSerialization($request->getReturnUrl(), 'string', 'url'));
        }
        if($request->getProductTemplateNo() != null){
            $internalRequest->addParameter('productTemplateNo', ObjectSerializer::sanitizeForSerialization($request->getProductTemplateNo(), 'string'));
        }
        if($request->getMerchantBaseInfo() != null){
            $internalRequest->addParameter('merchantBaseInfo', ObjectSerializer::sanitizeForSerialization($request->getMerchantBaseInfo(), 'string'));
        }
        if($request->getCorporationInfo() != null){
            $internalRequest->addParameter('corporationInfo', ObjectSerializer::sanitizeForSerialization($request->getCorporationInfo(), 'string'));
        }
        if($request->getContactInfo() != null){
            $internalRequest->addParameter('contactInfo', ObjectSerializer::sanitizeForSerialization($request->getContactInfo(), 'string'));
        }
        if($request->getBusinessAddressInfo() != null){
            $internalRequest->addParameter('businessAddressInfo', ObjectSerializer::sanitizeForSerialization($request->getBusinessAddressInfo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
RegisterSaasWebIndexV2RequestMarshaller::__init();
