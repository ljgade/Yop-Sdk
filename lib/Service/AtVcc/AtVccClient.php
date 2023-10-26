<?php


namespace Yeepay\Yop\Sdk\Service\AtVcc;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\AtVcc\Model as Model;

class AtVccClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * AtVccClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\UnionPayOrderQueryRequest $request
     * @return Model\UnionPayOrderQueryResponse
     * @throws YopClientException
     */
    public function unionPayOrderQuery(Model\UnionPayOrderQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getCustomerNo() == null) {
            throw new YopClientException("request.customerNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\UnionPayOrderQueryRequestMarshaller::getInstance(),
            Model\UnionPayOrderQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
