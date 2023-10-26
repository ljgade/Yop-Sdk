<?php


namespace Yeepay\Yop\Sdk\Service\Cnppay;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\Cnppay\Model as Model;

class CnppayClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * CnppayClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\InstallmentPayRequestRequest $request
     * @return Model\InstallmentPayRequestResponse
     * @throws YopClientException
     */
    public function installmentPayRequest(Model\InstallmentPayRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\InstallmentPayRequestRequestMarshaller::getInstance(),
            Model\InstallmentPayRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\InstallmentQuerybankcfgRequest $request
     * @return Model\InstallmentQuerybankcfgResponse
     * @throws YopClientException
     */
    public function installmentQuerybankcfg(Model\InstallmentQuerybankcfgRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\InstallmentQuerybankcfgRequestMarshaller::getInstance(),
            Model\InstallmentQuerybankcfgResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
