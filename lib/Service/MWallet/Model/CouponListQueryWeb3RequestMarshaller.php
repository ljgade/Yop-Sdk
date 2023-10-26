<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class CouponListQueryWeb3RequestMarshaller implements RequestMarshaller
{
    /**
     * @var CouponListQueryWeb3RequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new CouponListQueryWeb3RequestMarshaller();
    }

    /**
     * @return CouponListQueryWeb3RequestMarshaller
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
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/m-wallet/web3/coupon/list-query';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param CouponListQueryWeb3Request $request
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
        if($request->getMerchantUserNo() != null){
            $internalRequest->addParameter('merchantUserNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantUserNo(), 'string'));
        }
        if($request->getParentMerchantNo() != null){
            $internalRequest->addParameter('parentMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getParentMerchantNo(), 'string'));
        }
        if($request->getMerchantNo() != null){
            $internalRequest->addParameter('merchantNo', ObjectSerializer::sanitizeForSerialization($request->getMerchantNo(), 'string'));
        }
        if($request->getQueryType() != null){
            $internalRequest->addParameter('queryType', ObjectSerializer::sanitizeForSerialization($request->getQueryType(), 'string'));
        }
        if($request->getApplyEndTime() != null){
            $internalRequest->addParameter('applyEndTime', ObjectSerializer::sanitizeForSerialization($request->getApplyEndTime(), 'string'));
        }
        if($request->getPageNo() != null){
            $internalRequest->addParameter('pageNo', ObjectSerializer::sanitizeForSerialization($request->getPageNo(), 'int', 'int32'));
        }
        if($request->getOperatedMerchantNo() != null){
            $internalRequest->addParameter('operatedMerchantNo', ObjectSerializer::sanitizeForSerialization($request->getOperatedMerchantNo(), 'string'));
        }
        if($request->getPageSize() != null){
            $internalRequest->addParameter('pageSize', ObjectSerializer::sanitizeForSerialization($request->getPageSize(), 'int', 'int32'));
        }
        if($request->getApplyStartTime() != null){
            $internalRequest->addParameter('applyStartTime', ObjectSerializer::sanitizeForSerialization($request->getApplyStartTime(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
CouponListQueryWeb3RequestMarshaller::__init();
