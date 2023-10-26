<?php


namespace Yeepay\Yop\Sdk\Service\Account\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class IndividualApplyRequestMarshaller implements RequestMarshaller
{
    /**
     * @var IndividualApplyRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new IndividualApplyRequestMarshaller();
    }

    /**
     * @return IndividualApplyRequestMarshaller
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
    private $resourcePath = '/rest/v1.0/account/individual/apply';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param IndividualApplyRequest $request
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
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getName() != null){
            $internalRequest->addParameter('name', ObjectSerializer::sanitizeForSerialization($request->getName(), 'string'));
        }
        if($request->getCertificateType() != null){
            $internalRequest->addParameter('certificateType', ObjectSerializer::sanitizeForSerialization($request->getCertificateType(), 'string', 'enum'));
        }
        if($request->getCertificateNo() != null){
            $internalRequest->addParameter('certificateNo', ObjectSerializer::sanitizeForSerialization($request->getCertificateNo(), 'string'));
        }
        if($request->getPhone() != null){
            $internalRequest->addParameter('phone', ObjectSerializer::sanitizeForSerialization($request->getPhone(), 'string'));
        }
        if($request->getFrontUrl() != null){
            $internalRequest->addParameter('frontUrl', ObjectSerializer::sanitizeForSerialization($request->getFrontUrl(), 'string'));
        }
        if($request->getContraryUrl() != null){
            $internalRequest->addParameter('contraryUrl', ObjectSerializer::sanitizeForSerialization($request->getContraryUrl(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
IndividualApplyRequestMarshaller::__init();
