<?php


namespace Yeepay\Yop\Sdk\Service\Aggpay\Model;


use Yeepay\Yop\Sdk\Http\Headers;
use Yeepay\Yop\Sdk\Internal\DefaultRequest;
use Yeepay\Yop\Sdk\Internal\Request;
use Yeepay\Yop\Sdk\Model\Transform\RequestMarshaller;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;
use Yeepay\Yop\Sdk\Utils\UUIDUtils;

class ComplaintWechatDownloadPicRequestMarshaller implements RequestMarshaller
{
    /**
     * @var ComplaintWechatDownloadPicRequestMarshaller
     */
    private static $instance;

    public static function __init()
    {
        self::$instance = new ComplaintWechatDownloadPicRequestMarshaller();
    }

    /**
     * @return ComplaintWechatDownloadPicRequestMarshaller
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
    private $httpMethod = 'GET';

    /**
     * @var string
     */
    private $resourcePath = '/yos/v1.0/aggpay/complaint/wechat/download-pic';

    /**
     * @var string
     */
    private $contentType = 'application/x-www-form-urlencoded';


    /**
     * @param ComplaintWechatDownloadPicRequest $request
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
        if($request->getComplaintNo() != null){
            $internalRequest->addParameter('complaintNo', ObjectSerializer::sanitizeForSerialization($request->getComplaintNo(), 'string'));
        }
        if($request->getFileType() != null){
            $internalRequest->addParameter('fileType', ObjectSerializer::sanitizeForSerialization($request->getFileType(), 'string'));
        }
        if($request->getPictureUrl() != null){
            $internalRequest->addParameter('pictureUrl', ObjectSerializer::sanitizeForSerialization($request->getPictureUrl(), 'string'));
        }
        $internalRequest->addHeader(Headers::CONTENT_TYPE, $this->contentType);

        return $internalRequest;
    }
}
ComplaintWechatDownloadPicRequestMarshaller::__init();
