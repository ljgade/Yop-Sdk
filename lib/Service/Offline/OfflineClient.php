<?php


namespace Yeepay\Yop\Sdk\Service\Offline;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Offline\Model as Model;

class OfflineClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * OfflineClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\BindRequest $request
     * @return Model\BindResponse
     * @throws YopClientException
     */
    public function bind(Model\BindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BindRequestMarshaller::getInstance(),
            Model\BindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CreateShopRequest $request
     * @return Model\CreateShopResponse
     * @throws YopClientException
     */
    public function createShop(Model\CreateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateShopRequestMarshaller::getInstance(),
            Model\CreateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\GetShopRequest $request
     * @return Model\GetShopResponse
     * @throws YopClientException
     */
    public function getShop(Model\GetShopRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\GetShopRequestMarshaller::getInstance(),
            Model\GetShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OperateShopRequest $request
     * @return Model\OperateShopResponse
     * @throws YopClientException
     */
    public function operateShop(Model\OperateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OperateShopRequestMarshaller::getInstance(),
            Model\OperateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryAgentListRequest $request
     * @return Model\QueryAgentListResponse
     * @throws YopClientException
     */
    public function queryAgentList(Model\QueryAgentListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getAgentMerchantNo() == null) {
            throw new YopClientException("request.agentMerchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryAgentListRequestMarshaller::getInstance(),
            Model\QueryAgentListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryOrderInfoRequest $request
     * @return Model\QueryOrderInfoResponse
     * @throws YopClientException
     */
    public function queryOrderInfo(Model\QueryOrderInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryOrderInfoRequestMarshaller::getInstance(),
            Model\QueryOrderInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryPosTrxInfoRequest $request
     * @return Model\QueryPosTrxInfoResponse
     * @throws YopClientException
     */
    public function queryPosTrxInfo(Model\QueryPosTrxInfoRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryPosTrxInfoRequestMarshaller::getInstance(),
            Model\QueryPosTrxInfoResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryShopBindListRequest $request
     * @return Model\QueryShopBindListResponse
     * @throws YopClientException
     */
    public function queryShopBindList(Model\QueryShopBindListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getShopNo() == null) {
            throw new YopClientException("request.shopNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryShopBindListRequestMarshaller::getInstance(),
            Model\QueryShopBindListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UnbindRequest $request
     * @return Model\UnbindResponse
     * @throws YopClientException
     */
    public function unbind(Model\UnbindRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnbindRequestMarshaller::getInstance(),
            Model\UnbindResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\UpdateShopRequest $request
     * @return Model\UpdateShopResponse
     * @throws YopClientException
     */
    public function updateShop(Model\UpdateShopRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UpdateShopRequestMarshaller::getInstance(),
            Model\UpdateShopResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
