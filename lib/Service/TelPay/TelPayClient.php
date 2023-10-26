<?php


namespace Yeepay\Yop\Sdk\Service\TelPay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\TelPay\Model as Model;

class TelPayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * TelPayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\QrcodeBatchGenerateRequest $request
     * @return Model\QrcodeBatchGenerateResponse
     * @throws YopClientException
     */
    public function qrcodeBatchGenerate(Model\QrcodeBatchGenerateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QrcodeBatchGenerateRequestMarshaller::getInstance(),
            Model\QrcodeBatchGenerateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QrcodeQueryRequest $request
     * @return Model\QrcodeQueryResponse
     * @throws YopClientException
     */
    public function qrcodeQuery(Model\QrcodeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getRequestId() == null) {
            throw new YopClientException("request.requestId is required.");
        }
        if ($request->getPageSize() == null) {
            throw new YopClientException("request.pageSize is required.");
        }
        if ($request->getPageNo() == null) {
            throw new YopClientException("request.pageNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QrcodeQueryRequestMarshaller::getInstance(),
            Model\QrcodeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
