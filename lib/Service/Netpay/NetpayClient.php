<?php


namespace Yeepay\Yop\Sdk\Service\Netpay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Netpay\Model as Model;

class NetpayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * NetpayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\OrderRequest $request
     * @return Model\OrderResponse
     * @throws YopClientException
     */
    public function order(Model\OrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderRequestMarshaller::getInstance(),
            Model\OrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\OrderSdkPayOrderRequest $request
     * @return Model\OrderSdkPayOrderResponse
     * @throws YopClientException
     */
    public function orderSdkPayOrder(Model\OrderSdkPayOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\OrderSdkPayOrderRequestMarshaller::getInstance(),
            Model\OrderSdkPayOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
