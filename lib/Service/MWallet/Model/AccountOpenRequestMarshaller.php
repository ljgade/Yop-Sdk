<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class AccountOpenRequestMarshaller implements RequestMarshaller
{
    /**
     * @var AccountOpenRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new AccountOpenRequestMarshaller();
    }

    /**
     * @return AccountOpenRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'MWallet';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/m-wallet/account/open';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param AccountOpenRequest $request
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
        if($request->getName() != null){
            $internalRequest->addParameter('name', ObjectSerializer::sanitizeForSerialization($request->getName(), 'string'));
        }
        if($request->getCertificateType() != null){
            $internalRequest->addParameter('certificateType', ObjectSerializer::sanitizeForSerialization($request->getCertificateType(), 'string'));
        }
        if($request->getCertificateNo() != null){
            $internalRequest->addParameter('certificateNo', ObjectSerializer::sanitizeForSerialization($request->getCertificateNo(), 'string'));
        }
        if($request->getRequestNo() != null){
            $internalRequest->addParameter('requestNo', ObjectSerializer::sanitizeForSerialization($request->getRequestNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getMerchantUserNo() != null){
            $internalRequest->addParameter('merchantUserNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantUserNo(), 'string'));
        }
        if($request->getMobile() != null){
            $internalRequest->addParameter('mobile', ObjectSerializer::sanitizeForSerialization($request->getMobile(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
AccountOpenRequestMarshaller::__init();
