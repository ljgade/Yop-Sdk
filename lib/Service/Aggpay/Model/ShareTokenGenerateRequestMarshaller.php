<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ShareTokenGenerateRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ShareTokenGenerateRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ShareTokenGenerateRequestMarshaller();
    }

    /**
     * @return ShareTokenGenerateRequestMarshaller
     */
    public static function getInstance()
    {
        return self::$instance;
    }

    /**
     * @var string
     */
    private $serviceName = 'Aggpay';

    /**
     * @var string
     */
    private $httpMethod = 'POST';

    /**
     * @var string
     */
    private $resourcePath = '/rest/v1.0/aggpay/share-token/generate';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ShareTokenGenerateRequest $request
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
        if($request->getBizSystemNo() != null){
            $internalRequest->addParameter('bizSystemNo', ObjectSerializer::sanitizeForSerialization($request->getBizSystemNo(), 'string'));
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
            $internalRequest->addParameter('notifyUrl', ObjectSerializer::sanitizeForSerialization($request->getNotifyUrl(), 'string', 'url'));
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
        if($request->getLimitCredit() != null){
            $internalRequest->addParameter('limitCredit', ObjectSerializer::sanitizeForSerialization($request->getLimitCredit(), 'string'));
        }
        if($request->getToken() != null){
            $internalRequest->addParameter('token', ObjectSerializer::sanitizeForSerialization($request->getToken(), 'string'));
        }
        if($request->getCsUrl() != null){
            $internalRequest->addParameter('csUrl', ObjectSerializer::sanitizeForSerialization($request->getCsUrl(), 'string', 'url'));
        }
        if($request->getBusinessInfo() != null){
            $internalRequest->addParameter('businessInfo', ObjectSerializer::sanitizeForSerialization($request->getBusinessInfo(), 'string'));
        }
        if($request->getProductInfo() != null){
            $internalRequest->addParameter('productInfo', ObjectSerializer::sanitizeForSerialization($request->getProductInfo(), 'string'));
        }
        if($request->getYpAccountBookNo() != null){
            $internalRequest->addParameter('ypAccountBookNo', ObjectSerializer::sanitizeForSerialization($request->getYpAccountBookNo(), 'string'));
        }
        if($request->getDivideDetail() != null){
            $internalRequest->addParameter('divideDetail', ObjectSerializer::sanitizeForSerialization($request->getDivideDetail(), 'string'));
        }
        if($request->getDivideNotifyUrl() != null){
            $internalRequest->addParameter('divideNotifyUrl', ObjectSerializer::sanitizeForSerialization($request->getDivideNotifyUrl(), 'string'));
        }
        if($request->getFeeSubsidyInfo() != null){
            $internalRequest->addParameter('feeSubsidyInfo', ObjectSerializer::sanitizeForSerialization($request->getFeeSubsidyInfo(), 'string'));
        }
        if($request->getExternalUserId() != null){
            $internalRequest->addParameter('externalUserId', ObjectSerializer::sanitizeForSerialization($request->getExternalUserId(), 'string'));
        }
        if($request->getChannelPromotionInfo() != null){
            $internalRequest->addParameter('channelPromotionInfo', ObjectSerializer::sanitizeForSerialization($request->getChannelPromotionInfo(), 'string'));
        }
        if($request->getIdentityInfo() != null){
            $internalRequest->addParameter('identityInfo', ObjectSerializer::sanitizeForSerialization($request->getIdentityInfo(), 'string'));
        }
        if($request->getYpPromotionInfo() != null){
            $internalRequest->addParameter('ypPromotionInfo', ObjectSerializer::sanitizeForSerialization($request->getYpPromotionInfo(), 'string'));
        }
        if($request->getChannelOperationInfo() != null){
            $internalRequest->addParameter('channelOperationInfo', ObjectSerializer::sanitizeForSerialization($request->getChannelOperationInfo(), 'string'));
        }
        if($request->getShareTokenExpiredSeconds() != null){
            $internalRequest->addParameter('shareTokenExpiredSeconds', ObjectSerializer::sanitizeForSerialization($request->getShareTokenExpiredSeconds(), 'int', 'int32'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ShareTokenGenerateRequestMarshaller::__init();
