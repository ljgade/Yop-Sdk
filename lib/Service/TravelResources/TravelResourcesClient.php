<?php


namespace Yeepay\Yop\Sdk\Service\TravelResources;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\TravelResources\Model as Model;

class TravelResourcesClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * TravelResourcesClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\CreateOrderRequest $request
     * @return Model\CreateOrderResponse
     * @throws YopClientException
     */
    public function createOrder(Model\CreateOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CreateOrderRequestMarshaller::getInstance(),
            Model\CreateOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\KfcOrderRequest $request
     * @return Model\KfcOrderResponse
     * @throws YopClientException
     */
    public function kfcOrder(Model\KfcOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\KfcOrderRequestMarshaller::getInstance(),
            Model\KfcOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\KfcOrder0Request $request
     * @return Model\KfcOrder0Response
     * @throws YopClientException
     */
    public function kfcOrder_0(Model\KfcOrder0Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\KfcOrder0RequestMarshaller::getInstance(),
            Model\KfcOrder0ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryCinemaOrderRequest $request
     * @return Model\QueryCinemaOrderResponse
     * @throws YopClientException
     */
    public function queryCinemaOrder(Model\QueryCinemaOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryCinemaOrderRequestMarshaller::getInstance(),
            Model\QueryCinemaOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryKfcOrderRequest $request
     * @return Model\QueryKfcOrderResponse
     * @throws YopClientException
     */
    public function queryKfcOrder(Model\QueryKfcOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryKfcOrderRequestMarshaller::getInstance(),
            Model\QueryKfcOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\QueryOrderRequest $request
     * @return Model\QueryOrderResponse
     * @throws YopClientException
     */
    public function queryOrder(Model\QueryOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\QueryOrderRequestMarshaller::getInstance(),
            Model\QueryOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
