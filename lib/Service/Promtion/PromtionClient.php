<?php


namespace Yeepay\Yop\Sdk\Service\Promtion;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Promtion\Model as Model;

class PromtionClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * PromtionClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\ActivityListQueryRequest $request
     * @return Model\ActivityListQueryResponse
     * @throws YopClientException
     */
    public function activityListQuery(Model\ActivityListQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ActivityListQueryRequestMarshaller::getInstance(),
            Model\ActivityListQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AddRightsRequest $request
     * @return Model\AddRightsResponse
     * @throws YopClientException
     */
    public function addRights(Model\AddRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AddRightsRequestMarshaller::getInstance(),
            Model\AddRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AddRightsRequest $request
     * @return Model\AddRightsResponse
     * @throws YopClientException
     */
    public function add_rights(Model\AddRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AddRightsRequestMarshaller::getInstance(),
            Model\AddRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CouponApplyRequest $request
     * @return Model\CouponApplyResponse
     * @throws YopClientException
     */
    public function couponApply(Model\CouponApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CouponApplyRequestMarshaller::getInstance(),
            Model\CouponApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CouponListQueryRequest $request
     * @return Model\CouponListQueryResponse
     * @throws YopClientException
     */
    public function couponListQuery(Model\CouponListQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CouponListQueryRequestMarshaller::getInstance(),
            Model\CouponListQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateRightsQrcodeAdapterRequest $request
     * @return Model\CreateRightsQrcodeAdapterResponse
     * @throws YopClientException
     */
    public function create_rights_qrcode_adapter(Model\CreateRightsQrcodeAdapterRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateRightsQrcodeAdapterRequestMarshaller::getInstance(),
            Model\CreateRightsQrcodeAdapterResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\FrozenRightsRequest $request
     * @return Model\FrozenRightsResponse
     * @throws YopClientException
     */
    public function frozen_rights(Model\FrozenRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\FrozenRightsRequestMarshaller::getInstance(),
            Model\FrozenRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PointCreateRequest $request
     * @return Model\PointCreateResponse
     * @throws YopClientException
     */
    public function pointCreate(Model\PointCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PointCreateRequestMarshaller::getInstance(),
            Model\PointCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PointOperateRequest $request
     * @return Model\PointOperateResponse
     * @throws YopClientException
     */
    public function pointOperate(Model\PointOperateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PointOperateRequestMarshaller::getInstance(),
            Model\PointOperateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PointQueryRequest $request
     * @return Model\PointQueryResponse
     * @throws YopClientException
     */
    public function pointQuery(Model\PointQueryRequest $request)
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
        if ($request->getMerchantUserNo() == null) {
            throw new YopClientException("request.merchantUserNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PointQueryRequestMarshaller::getInstance(),
            Model\PointQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryConsumeRecordAdapterRequest $request
     * @return Model\QueryConsumeRecordAdapterResponse
     * @throws YopClientException
     */
    public function query_consume_record_adapter(Model\QueryConsumeRecordAdapterRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryConsumeRecordAdapterRequestMarshaller::getInstance(),
            Model\QueryConsumeRecordAdapterResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryRightsRequest $request
     * @return Model\QueryRightsResponse
     * @throws YopClientException
     */
    public function query_rights(Model\QueryRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryRightsRequestMarshaller::getInstance(),
            Model\QueryRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsCreateQrcodeRequest $request
     * @return Model\RightsCreateQrcodeResponse
     * @throws YopClientException
     */
    public function rightsCreateQrcode(Model\RightsCreateQrcodeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsCreateQrcodeRequestMarshaller::getInstance(),
            Model\RightsCreateQrcodeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsFrozenRightsRequest $request
     * @return Model\RightsFrozenRightsResponse
     * @throws YopClientException
     */
    public function rightsFrozenRights(Model\RightsFrozenRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsFrozenRightsRequestMarshaller::getInstance(),
            Model\RightsFrozenRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsQueryConsumeRecordsRequest $request
     * @return Model\RightsQueryConsumeRecordsResponse
     * @throws YopClientException
     */
    public function rightsQueryConsumeRecords(Model\RightsQueryConsumeRecordsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsQueryConsumeRecordsRequestMarshaller::getInstance(),
            Model\RightsQueryConsumeRecordsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsQueryRightsRequest $request
     * @return Model\RightsQueryRightsResponse
     * @throws YopClientException
     */
    public function rightsQueryRights(Model\RightsQueryRightsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsQueryRightsRequestMarshaller::getInstance(),
            Model\RightsQueryRightsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsTransferRequest $request
     * @return Model\RightsTransferResponse
     * @throws YopClientException
     */
    public function rightsTransfer(Model\RightsTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsTransferRequestMarshaller::getInstance(),
            Model\RightsTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RightsTransferRequest $request
     * @return Model\RightsTransferResponse
     * @throws YopClientException
     */
    public function rights_transfer(Model\RightsTransferRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RightsTransferRequestMarshaller::getInstance(),
            Model\RightsTransferResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyApplyRequest $request
     * @return Model\SubsidyApplyResponse
     * @throws YopClientException
     */
    public function subsidyApply(Model\SubsidyApplyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyApplyRequestMarshaller::getInstance(),
            Model\SubsidyApplyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyBackRequest $request
     * @return Model\SubsidyBackResponse
     * @throws YopClientException
     */
    public function subsidyBack(Model\SubsidyBackRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyBackRequestMarshaller::getInstance(),
            Model\SubsidyBackResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyBackQueryRequest $request
     * @return Model\SubsidyBackQueryResponse
     * @throws YopClientException
     */
    public function subsidyBackQuery(Model\SubsidyBackQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getSubsidyRequestId() == null) {
            throw new YopClientException("request.subsidyRequestId is required.");
        }
        if ($request->getSubsidyBackRequestId() == null) {
            throw new YopClientException("request.subsidyBackRequestId is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyBackQueryRequestMarshaller::getInstance(),
            Model\SubsidyBackQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubsidyQueryRequest $request
     * @return Model\SubsidyQueryResponse
     * @throws YopClientException
     */
    public function subsidyQuery(Model\SubsidyQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getOrderId() == null) {
            throw new YopClientException("request.orderId is required.");
        }
        if ($request->getSubsidyRequestId() == null) {
            throw new YopClientException("request.subsidyRequestId is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubsidyQueryRequestMarshaller::getInstance(),
            Model\SubsidyQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
