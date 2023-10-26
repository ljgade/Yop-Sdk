<?php


namespace Yeepay\Yop\Sdk\Service\Settle;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Model\YosDownloadResponse;
use Yeepay\Yop\Sdk\Model\Transform\YosDownloadResponseUnMarshaller;
use Yeepay\Yop\Sdk\Service\Settle\Model as Model;

class SettleClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * SettleClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BalanceQueryRequest $request
     * @return Model\BalanceQueryResponse
     * @throws YopClientException
     */
    public function balanceQuery(Model\BalanceQueryRequest $request)
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
        if ($request->getOperatePeriod() == null) {
            throw new YopClientException("request.operatePeriod is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BalanceQueryRequestMarshaller::getInstance(),
            Model\BalanceQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FileGetRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function fileGet(Model\FileGetRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FileGetRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptApplyRequest $request
     * @return Model\ReceiptApplyResponse
     * @throws YopClientException
     */
    public function receiptApply(Model\ReceiptApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptApplyRequestMarshaller::getInstance(),
            Model\ReceiptApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ReceiptGetRequest $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function receiptGet(Model\ReceiptGetRequest $request)
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
        if ($request->getFileId() == null) {
            throw new YopClientException("request.fileId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ReceiptGetRequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordsOrderQueryRequest $request
     * @return Model\RecordsOrderQueryResponse
     * @throws YopClientException
     */
    public function recordsOrderQuery(Model\RecordsOrderQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getRequestId() == null) {
            throw new YopClientException("request.requestId is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getBusinessType() == null) {
            throw new YopClientException("request.businessType is required.");
        }
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        if ($request->getSettleMerchantNo() == null) {
            throw new YopClientException("request.settleMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordsOrderQueryRequestMarshaller::getInstance(),
            Model\RecordsOrderQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RecordsQueryRequest $request
     * @return Model\RecordsQueryResponse
     * @throws YopClientException
     */
    public function recordsQuery(Model\RecordsQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\RecordsQueryRequestMarshaller::getInstance(),
            Model\RecordsQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SelfSettleApplyRequest $request
     * @return Model\SelfSettleApplyResponse
     * @throws YopClientException
     */
    public function selfSettleApply(Model\SelfSettleApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SelfSettleApplyRequestMarshaller::getInstance(),
            Model\SelfSettleApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleCardAddRequest $request
     * @return Model\SettleCardAddResponse
     * @throws YopClientException
     */
    public function settleCardAdd(Model\SettleCardAddRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleCardAddRequestMarshaller::getInstance(),
            Model\SettleCardAddResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleCardModifyRequest $request
     * @return Model\SettleCardModifyResponse
     * @throws YopClientException
     */
    public function settleCardModify(Model\SettleCardModifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleCardModifyRequestMarshaller::getInstance(),
            Model\SettleCardModifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleWayModifyRatioRequest $request
     * @return Model\SettleWayModifyRatioResponse
     * @throws YopClientException
     */
    public function settleWayModifyRatio(Model\SettleWayModifyRatioRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getBody() == null) {
            throw new YopClientException("request.body is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleWayModifyRatioRequestMarshaller::getInstance(),
            Model\SettleWayModifyRatioResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleWayQueryRequest $request
     * @return Model\SettleWayQueryResponse
     * @throws YopClientException
     */
    public function settleWayQuery(Model\SettleWayQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleWayQueryRequestMarshaller::getInstance(),
            Model\SettleWayQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleReceiptApplyV10Request $request
     * @return Model\SettleReceiptApplyV10Response
     * @throws YopClientException
     */
    public function settle_receipt_apply_v1_0(Model\SettleReceiptApplyV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleReceiptApplyV10RequestMarshaller::getInstance(),
            Model\SettleReceiptApplyV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleReceiptGetV10Request $request
     * @return YosDownloadResponse
     * @throws YopClientException
     */
    public function settle_receipt_get_v1_0(Model\SettleReceiptGetV10Request $request)
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
        if ($request->getFileId() == null) {
            throw new YopClientException("request.fileId is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleReceiptGetV10RequestMarshaller::getInstance(),
            YosDownloadResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SettleRecodOrderQueryV10Request $request
     * @return Model\SettleRecodOrderQueryV10Response
     * @throws YopClientException
     */
    public function settle_recod_order_query_v1_0(Model\SettleRecodOrderQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getRequestId() == null) {
            throw new YopClientException("request.requestId is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getBusinessType() == null) {
            throw new YopClientException("request.businessType is required.");
        }
        if ($request->getUniqueOrderNo() == null) {
            throw new YopClientException("request.uniqueOrderNo is required.");
        }
        if ($request->getSettleMerchantNo() == null) {
            throw new YopClientException("request.settleMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SettleRecodOrderQueryV10RequestMarshaller::getInstance(),
            Model\SettleRecodOrderQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
