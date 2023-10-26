<?php


namespace Yeepay\Yop\Sdk\Service\MWallet;


use Yeepay\Yop\Sdk\Client\ClientExecutionParams;
use Yeepay\Yop\Sdk\Client\ClientHandler;
use Yeepay\Yop\Sdk\Client\ClientParams;
use Yeepay\Yop\Sdk\Exception\YopClientException;
use Yeepay\Yop\Sdk\Service\MWallet\Model as Model;

class MWalletClient
{
    /**
     * @var ClientHandler
     */
    private $clientHandler;

    /**
     * MWalletClient constructor.
     * @param ClientParams $clientParams
     */
    function __construct(ClientParams $clientParams)
    {
        $this->clientHandler = new ClientHandler($clientParams);
    }

    /**
     * @param Model\AccountFaceCertifyOpenRequest $request
     * @return Model\AccountFaceCertifyOpenResponse
     * @throws YopClientException
     */
    public function accountFaceCertifyOpen(Model\AccountFaceCertifyOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountFaceCertifyOpenRequestMarshaller::getInstance(),
            Model\AccountFaceCertifyOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountOpenRequest $request
     * @return Model\AccountOpenResponse
     * @throws YopClientException
     */
    public function accountOpen(Model\AccountOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountOpenRequestMarshaller::getInstance(),
            Model\AccountOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountOpenNotifyRequest $request
     * @return Model\AccountOpenNotifyResponse
     * @throws YopClientException
     */
    public function accountOpenNotify(Model\AccountOpenNotifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountOpenNotifyRequestMarshaller::getInstance(),
            Model\AccountOpenNotifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountQueryRequest $request
     * @return Model\AccountQueryResponse
     * @throws YopClientException
     */
    public function accountQuery(Model\AccountQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantUserNo() == null) {
            throw new YopClientException("request.merchantUserNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountQueryRequestMarshaller::getInstance(),
            Model\AccountQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountQueryBalanceRequest $request
     * @return Model\AccountQueryBalanceResponse
     * @throws YopClientException
     */
    public function accountQueryBalance(Model\AccountQueryBalanceRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantMemberNo() == null) {
            throw new YopClientException("request.merchantMemberNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountQueryBalanceRequestMarshaller::getInstance(),
            Model\AccountQueryBalanceResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountQueryQuotaRequest $request
     * @return Model\AccountQueryQuotaResponse
     * @throws YopClientException
     */
    public function accountQueryQuota(Model\AccountQueryQuotaRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountQueryQuotaRequestMarshaller::getInstance(),
            Model\AccountQueryQuotaResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountFaceCertifyOpenRequest $request
     * @return Model\AccountFaceCertifyOpenResponse
     * @throws YopClientException
     */
    public function account_face_certify_open(Model\AccountFaceCertifyOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountFaceCertifyOpenRequestMarshaller::getInstance(),
            Model\AccountFaceCertifyOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountOpenNotifyRequest $request
     * @return Model\AccountOpenNotifyResponse
     * @throws YopClientException
     */
    public function account_open_notify(Model\AccountOpenNotifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountOpenNotifyRequestMarshaller::getInstance(),
            Model\AccountOpenNotifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountOpenV10Request $request
     * @return Model\AccountOpenV10Response
     * @throws YopClientException
     */
    public function account_open_v1_0(Model\AccountOpenV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountOpenV10RequestMarshaller::getInstance(),
            Model\AccountOpenV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountQueryQuotaRequest $request
     * @return Model\AccountQueryQuotaResponse
     * @throws YopClientException
     */
    public function account_query_quota(Model\AccountQueryQuotaRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountQueryQuotaRequestMarshaller::getInstance(),
            Model\AccountQueryQuotaResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AccountQueryV10Request $request
     * @return Model\AccountQueryV10Response
     * @throws YopClientException
     */
    public function account_query_v1_0(Model\AccountQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantUserNo() == null) {
            throw new YopClientException("request.merchantUserNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AccountQueryV10RequestMarshaller::getInstance(),
            Model\AccountQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentCancelRequest $request
     * @return Model\AgreementPaymentCancelResponse
     * @throws YopClientException
     */
    public function agreementPaymentCancel(Model\AgreementPaymentCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentCancelRequestMarshaller::getInstance(),
            Model\AgreementPaymentCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentQueryRequest $request
     * @return Model\AgreementPaymentQueryResponse
     * @throws YopClientException
     */
    public function agreementPaymentQuery(Model\AgreementPaymentQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentQueryRequestMarshaller::getInstance(),
            Model\AgreementPaymentQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentRequestRequest $request
     * @return Model\AgreementPaymentRequestResponse
     * @throws YopClientException
     */
    public function agreementPaymentRequest(Model\AgreementPaymentRequestRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentRequestRequestMarshaller::getInstance(),
            Model\AgreementPaymentRequestResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentSignRequest $request
     * @return Model\AgreementPaymentSignResponse
     * @throws YopClientException
     */
    public function agreementPaymentSign(Model\AgreementPaymentSignRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentSignRequestMarshaller::getInstance(),
            Model\AgreementPaymentSignResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentCancelV10Request $request
     * @return Model\AgreementPaymentCancelV10Response
     * @throws YopClientException
     */
    public function agreement_payment_cancel_v1_0(Model\AgreementPaymentCancelV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentCancelV10RequestMarshaller::getInstance(),
            Model\AgreementPaymentCancelV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentCancelWeb3V10Request $request
     * @return Model\AgreementPaymentCancelWeb3V10Response
     * @throws YopClientException
     */
    public function agreement_payment_cancel_web3_v1_0(Model\AgreementPaymentCancelWeb3V10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentCancelWeb3V10RequestMarshaller::getInstance(),
            Model\AgreementPaymentCancelWeb3V10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentNotifyWeb3Request $request
     * @return Model\AgreementPaymentNotifyWeb3Response
     * @throws YopClientException
     */
    public function agreement_payment_notify_web3(Model\AgreementPaymentNotifyWeb3Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentNotifyWeb3RequestMarshaller::getInstance(),
            Model\AgreementPaymentNotifyWeb3ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentQueryRequest $request
     * @return Model\AgreementPaymentQueryResponse
     * @throws YopClientException
     */
    public function agreement_payment_query(Model\AgreementPaymentQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentQueryRequestMarshaller::getInstance(),
            Model\AgreementPaymentQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentQueryWeb3V10Request $request
     * @return Model\AgreementPaymentQueryWeb3V10Response
     * @throws YopClientException
     */
    public function agreement_payment_query_web3_v1_0(Model\AgreementPaymentQueryWeb3V10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantUserNo() == null) {
            throw new YopClientException("request.merchantUserNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentQueryWeb3V10RequestMarshaller::getInstance(),
            Model\AgreementPaymentQueryWeb3V10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentRequestV1Request $request
     * @return Model\AgreementPaymentRequestV1Response
     * @throws YopClientException
     */
    public function agreement_payment_request_v1(Model\AgreementPaymentRequestV1Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentRequestV1RequestMarshaller::getInstance(),
            Model\AgreementPaymentRequestV1ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentSignV10Request $request
     * @return Model\AgreementPaymentSignV10Response
     * @throws YopClientException
     */
    public function agreement_payment_sign_v1_0(Model\AgreementPaymentSignV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentSignV10RequestMarshaller::getInstance(),
            Model\AgreementPaymentSignV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AgreementPaymentSignWeb3V10Request $request
     * @return Model\AgreementPaymentSignWeb3V10Response
     * @throws YopClientException
     */
    public function agreement_payment_sign_web3_v1_0(Model\AgreementPaymentSignWeb3V10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AgreementPaymentSignWeb3V10RequestMarshaller::getInstance(),
            Model\AgreementPaymentSignWeb3V10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRequest $request
     * @return Model\AutoWithdrawResponse
     * @throws YopClientException
     */
    public function autoWithdraw(Model\AutoWithdrawRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRequestMarshaller::getInstance(),
            Model\AutoWithdrawResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawQueryRequest $request
     * @return Model\AutoWithdrawQueryResponse
     * @throws YopClientException
     */
    public function autoWithdrawQuery(Model\AutoWithdrawQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawQueryRequestMarshaller::getInstance(),
            Model\AutoWithdrawQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoDeductionCreateRequest $request
     * @return Model\AutoDeductionCreateResponse
     * @throws YopClientException
     */
    public function auto_deduction_create(Model\AutoDeductionCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoDeductionCreateRequestMarshaller::getInstance(),
            Model\AutoDeductionCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoDeductionQueryRequest $request
     * @return Model\AutoDeductionQueryResponse
     * @throws YopClientException
     */
    public function auto_deduction_query(Model\AutoDeductionQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoDeductionQueryRequestMarshaller::getInstance(),
            Model\AutoDeductionQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawRequest $request
     * @return Model\AutoWithdrawResponse
     * @throws YopClientException
     */
    public function auto_withdraw(Model\AutoWithdrawRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawRequestMarshaller::getInstance(),
            Model\AutoWithdrawResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\AutoWithdrawQueryRequest $request
     * @return Model\AutoWithdrawQueryResponse
     * @throws YopClientException
     */
    public function auto_withdraw_query(Model\AutoWithdrawQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\AutoWithdrawQueryRequestMarshaller::getInstance(),
            Model\AutoWithdrawQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountConfirmRequest $request
     * @return Model\BankAccountConfirmResponse
     * @throws YopClientException
     */
    public function bankAccountConfirm(Model\BankAccountConfirmRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountConfirmRequestMarshaller::getInstance(),
            Model\BankAccountConfirmResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountOpenRequest $request
     * @return Model\BankAccountOpenResponse
     * @throws YopClientException
     */
    public function bankAccountOpen(Model\BankAccountOpenRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountOpenRequestMarshaller::getInstance(),
            Model\BankAccountOpenResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryActivationRequest $request
     * @return Model\BankAccountQueryActivationResponse
     * @throws YopClientException
     */
    public function bankAccountQueryActivation(Model\BankAccountQueryActivationRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryActivationRequestMarshaller::getInstance(),
            Model\BankAccountQueryActivationResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryComplaintRequest $request
     * @return Model\BankAccountQueryComplaintResponse
     * @throws YopClientException
     */
    public function bankAccountQueryComplaint(Model\BankAccountQueryComplaintRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantMemberNo() == null) {
            throw new YopClientException("request.merchantMemberNo is required.");
        }
        if ($request->getAccountNo() == null) {
            throw new YopClientException("request.accountNo is required.");
        }
        if ($request->getBankTradeNo() == null) {
            throw new YopClientException("request.bankTradeNo is required.");
        }
        if ($request->getTradeTime() == null) {
            throw new YopClientException("request.tradeTime is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryComplaintRequestMarshaller::getInstance(),
            Model\BankAccountQueryComplaintResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryOpenResultRequest $request
     * @return Model\BankAccountQueryOpenResultResponse
     * @throws YopClientException
     */
    public function bankAccountQueryOpenResult(Model\BankAccountQueryOpenResultRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryOpenResultRequestMarshaller::getInstance(),
            Model\BankAccountQueryOpenResultResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryTradeRequest $request
     * @return Model\BankAccountQueryTradeResponse
     * @throws YopClientException
     */
    public function bankAccountQueryTrade(Model\BankAccountQueryTradeRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantMemberNo() == null) {
            throw new YopClientException("request.merchantMemberNo is required.");
        }
        if ($request->getAccountNo() == null) {
            throw new YopClientException("request.accountNo is required.");
        }
        if ($request->getBeginDate() == null) {
            throw new YopClientException("request.beginDate is required.");
        }
        if ($request->getEndDate() == null) {
            throw new YopClientException("request.endDate is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryTradeRequestMarshaller::getInstance(),
            Model\BankAccountQueryTradeResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryWithdrawRequest $request
     * @return Model\BankAccountQueryWithdrawResponse
     * @throws YopClientException
     */
    public function bankAccountQueryWithdraw(Model\BankAccountQueryWithdrawRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryWithdrawRequestMarshaller::getInstance(),
            Model\BankAccountQueryWithdrawResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountSendMsgRequest $request
     * @return Model\BankAccountSendMsgResponse
     * @throws YopClientException
     */
    public function bankAccountSendMsg(Model\BankAccountSendMsgRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountSendMsgRequestMarshaller::getInstance(),
            Model\BankAccountSendMsgResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountUpdateKeyWordsRequest $request
     * @return Model\BankAccountUpdateKeyWordsResponse
     * @throws YopClientException
     */
    public function bankAccountUpdateKeyWords(Model\BankAccountUpdateKeyWordsRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountUpdateKeyWordsRequestMarshaller::getInstance(),
            Model\BankAccountUpdateKeyWordsResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountWithdrawRequest $request
     * @return Model\BankAccountWithdrawResponse
     * @throws YopClientException
     */
    public function bankAccountWithdraw(Model\BankAccountWithdrawRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountWithdrawRequestMarshaller::getInstance(),
            Model\BankAccountWithdrawResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountConfirmV10Request $request
     * @return Model\BankAccountConfirmV10Response
     * @throws YopClientException
     */
    public function bank_account_confirm_v1_0(Model\BankAccountConfirmV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountConfirmV10RequestMarshaller::getInstance(),
            Model\BankAccountConfirmV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountOpenV10Request $request
     * @return Model\BankAccountOpenV10Response
     * @throws YopClientException
     */
    public function bank_account_open_v1_0(Model\BankAccountOpenV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountOpenV10RequestMarshaller::getInstance(),
            Model\BankAccountOpenV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryActivationV10Request $request
     * @return Model\BankAccountQueryActivationV10Response
     * @throws YopClientException
     */
    public function bank_account_query_activation_v1_0(Model\BankAccountQueryActivationV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryActivationV10RequestMarshaller::getInstance(),
            Model\BankAccountQueryActivationV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryComplaintV10Request $request
     * @return Model\BankAccountQueryComplaintV10Response
     * @throws YopClientException
     */
    public function bank_account_query_complaint_v1_0(Model\BankAccountQueryComplaintV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantMemberNo() == null) {
            throw new YopClientException("request.merchantMemberNo is required.");
        }
        if ($request->getAccountNo() == null) {
            throw new YopClientException("request.accountNo is required.");
        }
        if ($request->getBankTradeNo() == null) {
            throw new YopClientException("request.bankTradeNo is required.");
        }
        if ($request->getTradeTime() == null) {
            throw new YopClientException("request.tradeTime is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryComplaintV10RequestMarshaller::getInstance(),
            Model\BankAccountQueryComplaintV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryOpenResultV10Request $request
     * @return Model\BankAccountQueryOpenResultV10Response
     * @throws YopClientException
     */
    public function bank_account_query_open_result_v1_0(Model\BankAccountQueryOpenResultV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryOpenResultV10RequestMarshaller::getInstance(),
            Model\BankAccountQueryOpenResultV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryTradeV10Request $request
     * @return Model\BankAccountQueryTradeV10Response
     * @throws YopClientException
     */
    public function bank_account_query_trade_v1_0(Model\BankAccountQueryTradeV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantMemberNo() == null) {
            throw new YopClientException("request.merchantMemberNo is required.");
        }
        if ($request->getAccountNo() == null) {
            throw new YopClientException("request.accountNo is required.");
        }
        if ($request->getBeginDate() == null) {
            throw new YopClientException("request.beginDate is required.");
        }
        if ($request->getEndDate() == null) {
            throw new YopClientException("request.endDate is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryTradeV10RequestMarshaller::getInstance(),
            Model\BankAccountQueryTradeV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountQueryWithdrawV10Request $request
     * @return Model\BankAccountQueryWithdrawV10Response
     * @throws YopClientException
     */
    public function bank_account_query_withdraw_v1_0(Model\BankAccountQueryWithdrawV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountQueryWithdrawV10RequestMarshaller::getInstance(),
            Model\BankAccountQueryWithdrawV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountSendMsgV10Request $request
     * @return Model\BankAccountSendMsgV10Response
     * @throws YopClientException
     */
    public function bank_account_send_msg_v1_0(Model\BankAccountSendMsgV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountSendMsgV10RequestMarshaller::getInstance(),
            Model\BankAccountSendMsgV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountUpdateKeyWordsV10Request $request
     * @return Model\BankAccountUpdateKeyWordsV10Response
     * @throws YopClientException
     */
    public function bank_account_update_key_words_v1_0(Model\BankAccountUpdateKeyWordsV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountUpdateKeyWordsV10RequestMarshaller::getInstance(),
            Model\BankAccountUpdateKeyWordsV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BankAccountWithdrawV10Request $request
     * @return Model\BankAccountWithdrawV10Response
     * @throws YopClientException
     */
    public function bank_account_withdraw_v1_0(Model\BankAccountWithdrawV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BankAccountWithdrawV10RequestMarshaller::getInstance(),
            Model\BankAccountWithdrawV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillQueryDetailRequest $request
     * @return Model\BillQueryDetailResponse
     * @throws YopClientException
     */
    public function billQueryDetail(Model\BillQueryDetailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillQueryDetailRequestMarshaller::getInstance(),
            Model\BillQueryDetailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillQueryListRequest $request
     * @return Model\BillQueryListResponse
     * @throws YopClientException
     */
    public function billQueryList(Model\BillQueryListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillQueryListRequestMarshaller::getInstance(),
            Model\BillQueryListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillQueryListV2Request $request
     * @return Model\BillQueryListV2Response
     * @throws YopClientException
     */
    public function billQueryListV2(Model\BillQueryListV2Request $request)
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
        if ($request->getPage() == null) {
            throw new YopClientException("request.page is required.");
        }
        if ($request->getPageNum() == null) {
            throw new YopClientException("request.pageNum is required.");
        }
        if ($request->getEndTime() == null) {
            throw new YopClientException("request.endTime is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillQueryListV2RequestMarshaller::getInstance(),
            Model\BillQueryListV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillQueryOverviewRequest $request
     * @return Model\BillQueryOverviewResponse
     * @throws YopClientException
     */
    public function billQueryOverview(Model\BillQueryOverviewRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillQueryOverviewRequestMarshaller::getInstance(),
            Model\BillQueryOverviewResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillQueryDetailRequest $request
     * @return Model\BillQueryDetailResponse
     * @throws YopClientException
     */
    public function bill_query_detail(Model\BillQueryDetailRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillQueryDetailRequestMarshaller::getInstance(),
            Model\BillQueryDetailResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillQueryListRequest $request
     * @return Model\BillQueryListResponse
     * @throws YopClientException
     */
    public function bill_query_list(Model\BillQueryListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillQueryListRequestMarshaller::getInstance(),
            Model\BillQueryListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\BillQueryOverviewRequest $request
     * @return Model\BillQueryOverviewResponse
     * @throws YopClientException
     */
    public function bill_query_overview(Model\BillQueryOverviewRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\BillQueryOverviewRequestMarshaller::getInstance(),
            Model\BillQueryOverviewResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CardQueryRequest $request
     * @return Model\CardQueryResponse
     * @throws YopClientException
     */
    public function cardQuery(Model\CardQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CardQueryRequestMarshaller::getInstance(),
            Model\CardQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CardQueryV10Request $request
     * @return Model\CardQueryV10Response
     * @throws YopClientException
     */
    public function card_query_v1_0(Model\CardQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CardQueryV10RequestMarshaller::getInstance(),
            Model\CardQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\CouponListQueryWeb3Request $request
     * @return Model\CouponListQueryWeb3Response
     * @throws YopClientException
     */
    public function coupon_list_query_web3(Model\CouponListQueryWeb3Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantUserNo() == null) {
            throw new YopClientException("request.merchantUserNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getQueryType() == null) {
            throw new YopClientException("request.queryType is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\CouponListQueryWeb3RequestMarshaller::getInstance(),
            Model\CouponListQueryWeb3ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageFeeQueryDeductRequest $request
     * @return Model\ManageFeeQueryDeductResponse
     * @throws YopClientException
     */
    public function manageFeeQueryDeduct(Model\ManageFeeQueryDeductRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRealName() == null) {
            throw new YopClientException("request.realName is required.");
        }
        if ($request->getIdCardNo() == null) {
            throw new YopClientException("request.idCardNo is required.");
        }
        if ($request->getRegisterMobile() == null) {
            throw new YopClientException("request.registerMobile is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageFeeQueryDeductRequestMarshaller::getInstance(),
            Model\ManageFeeQueryDeductResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\ManageFeeQueryDeductRequest $request
     * @return Model\ManageFeeQueryDeductResponse
     * @throws YopClientException
     */
    public function manage_fee_query_deduct(Model\ManageFeeQueryDeductRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRealName() == null) {
            throw new YopClientException("request.realName is required.");
        }
        if ($request->getIdCardNo() == null) {
            throw new YopClientException("request.idCardNo is required.");
        }
        if ($request->getRegisterMobile() == null) {
            throw new YopClientException("request.registerMobile is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\ManageFeeQueryDeductRequestMarshaller::getInstance(),
            Model\ManageFeeQueryDeductResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MemberCardListRequest $request
     * @return Model\MemberCardListResponse
     * @throws YopClientException
     */
    public function memberCardList(Model\MemberCardListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MemberCardListRequestMarshaller::getInstance(),
            Model\MemberCardListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MemberQueryRequest $request
     * @return Model\MemberQueryResponse
     * @throws YopClientException
     */
    public function memberQuery(Model\MemberQueryRequest $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\MemberQueryRequestMarshaller::getInstance(),
            Model\MemberQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MemberCardListRequest $request
     * @return Model\MemberCardListResponse
     * @throws YopClientException
     */
    public function member_card_list(Model\MemberCardListRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\MemberCardListRequestMarshaller::getInstance(),
            Model\MemberCardListResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\MemberQueryV10Request $request
     * @return Model\MemberQueryV10Response
     * @throws YopClientException
     */
    public function member_query_v1_0(Model\MemberQueryV10Request $request)
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
        $clientExecutionParams = new ClientExecutionParams($request, Model\MemberQueryV10RequestMarshaller::getInstance(),
            Model\MemberQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PasswordManageRequest $request
     * @return Model\PasswordManageResponse
     * @throws YopClientException
     */
    public function passwordManage(Model\PasswordManageRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PasswordManageRequestMarshaller::getInstance(),
            Model\PasswordManageResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PasswordManageV10Request $request
     * @return Model\PasswordManageV10Response
     * @throws YopClientException
     */
    public function password_manage_v1_0(Model\PasswordManageV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PasswordManageV10RequestMarshaller::getInstance(),
            Model\PasswordManageV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\PaymentManageWeb3V10Request $request
     * @return Model\PaymentManageWeb3V10Response
     * @throws YopClientException
     */
    public function payment_manage_web3_v1_0(Model\PaymentManageWeb3V10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\PaymentManageWeb3V10RequestMarshaller::getInstance(),
            Model\PaymentManageWeb3V10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeInitiateRequest $request
     * @return Model\RechargeInitiateResponse
     * @throws YopClientException
     */
    public function rechargeInitiate(Model\RechargeInitiateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeInitiateRequestMarshaller::getInstance(),
            Model\RechargeInitiateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeQueryRequest $request
     * @return Model\RechargeQueryResponse
     * @throws YopClientException
     */
    public function rechargeQuery(Model\RechargeQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeQueryRequestMarshaller::getInstance(),
            Model\RechargeQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeInitiateV10Request $request
     * @return Model\RechargeInitiateV10Response
     * @throws YopClientException
     */
    public function recharge_initiate_v1_0(Model\RechargeInitiateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeInitiateV10RequestMarshaller::getInstance(),
            Model\RechargeInitiateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\RechargeQueryV10Request $request
     * @return Model\RechargeQueryV10Response
     * @throws YopClientException
     */
    public function recharge_query_v1_0(Model\RechargeQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\RechargeQueryV10RequestMarshaller::getInstance(),
            Model\RechargeQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubscribeExpireNotifyRequest $request
     * @return Model\SubscribeExpireNotifyResponse
     * @throws YopClientException
     */
    public function subscribeExpireNotify(Model\SubscribeExpireNotifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubscribeExpireNotifyRequestMarshaller::getInstance(),
            Model\SubscribeExpireNotifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\SubscribeExpireNotifyRequest $request
     * @return Model\SubscribeExpireNotifyResponse
     * @throws YopClientException
     */
    public function subscribe_expire_notify(Model\SubscribeExpireNotifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\SubscribeExpireNotifyRequestMarshaller::getInstance(),
            Model\SubscribeExpireNotifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeAutoDeductionCreateRequest $request
     * @return Model\TradeAutoDeductionCreateResponse
     * @throws YopClientException
     */
    public function tradeAutoDeductionCreate(Model\TradeAutoDeductionCreateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeAutoDeductionCreateRequestMarshaller::getInstance(),
            Model\TradeAutoDeductionCreateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeAutoDeductionQueryRequest $request
     * @return Model\TradeAutoDeductionQueryResponse
     * @throws YopClientException
     */
    public function tradeAutoDeductionQuery(Model\TradeAutoDeductionQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeAutoDeductionQueryRequestMarshaller::getInstance(),
            Model\TradeAutoDeductionQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeOrderRequest $request
     * @return Model\TradeOrderResponse
     * @throws YopClientException
     */
    public function tradeOrder(Model\TradeOrderRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeOrderRequestMarshaller::getInstance(),
            Model\TradeOrderResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeOrderV2Request $request
     * @return Model\TradeOrderV2Response
     * @throws YopClientException
     */
    public function tradeOrderV2(Model\TradeOrderV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeOrderV2RequestMarshaller::getInstance(),
            Model\TradeOrderV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeOrderV10Request $request
     * @return Model\TradeOrderV10Response
     * @throws YopClientException
     */
    public function trade_order_v1_0(Model\TradeOrderV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeOrderV10RequestMarshaller::getInstance(),
            Model\TradeOrderV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TradeOrderV20Request $request
     * @return Model\TradeOrderV20Response
     * @throws YopClientException
     */
    public function trade_order_v2_0(Model\TradeOrderV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TradeOrderV20RequestMarshaller::getInstance(),
            Model\TradeOrderV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2cInitiateRequest $request
     * @return Model\TransferB2cInitiateResponse
     * @throws YopClientException
     */
    public function transferB2cInitiate(Model\TransferB2cInitiateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2cInitiateRequestMarshaller::getInstance(),
            Model\TransferB2cInitiateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2cMarketRequest $request
     * @return Model\TransferB2cMarketResponse
     * @throws YopClientException
     */
    public function transferB2cMarket(Model\TransferB2cMarketRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2cMarketRequestMarshaller::getInstance(),
            Model\TransferB2cMarketResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2cQueryRequest $request
     * @return Model\TransferB2cQueryResponse
     * @throws YopClientException
     */
    public function transferB2cQuery(Model\TransferB2cQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getFromMerchantNo() == null) {
            throw new YopClientException("request.fromMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2cQueryRequestMarshaller::getInstance(),
            Model\TransferB2cQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2cInitiateV10Request $request
     * @return Model\TransferB2cInitiateV10Response
     * @throws YopClientException
     */
    public function transfer_b2c_initiate_v1_0(Model\TransferB2cInitiateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2cInitiateV10RequestMarshaller::getInstance(),
            Model\TransferB2cInitiateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2cMarketV10Request $request
     * @return Model\TransferB2cMarketV10Response
     * @throws YopClientException
     */
    public function transfer_b2c_market_v1_0(Model\TransferB2cMarketV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2cMarketV10RequestMarshaller::getInstance(),
            Model\TransferB2cMarketV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\TransferB2cQueryV10Request $request
     * @return Model\TransferB2cQueryV10Response
     * @throws YopClientException
     */
    public function transfer_b2c_query_v1_0(Model\TransferB2cQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getFromMerchantNo() == null) {
            throw new YopClientException("request.fromMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\TransferB2cQueryV10RequestMarshaller::getInstance(),
            Model\TransferB2cQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WalletCancelRequest $request
     * @return Model\WalletCancelResponse
     * @throws YopClientException
     */
    public function walletCancel(Model\WalletCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WalletCancelRequestMarshaller::getInstance(),
            Model\WalletCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WalletIndexV2Request $request
     * @return Model\WalletIndexV2Response
     * @throws YopClientException
     */
    public function walletIndexV2(Model\WalletIndexV2Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WalletIndexV2RequestMarshaller::getInstance(),
            Model\WalletIndexV2ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WalletCancelV10Request $request
     * @return Model\WalletCancelV10Response
     * @throws YopClientException
     */
    public function wallet_cancel_v1_0(Model\WalletCancelV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WalletCancelV10RequestMarshaller::getInstance(),
            Model\WalletCancelV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WalletIndexV20Request $request
     * @return Model\WalletIndexV20Response
     * @throws YopClientException
     */
    public function wallet_index_v2_0(Model\WalletIndexV20Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WalletIndexV20RequestMarshaller::getInstance(),
            Model\WalletIndexV20ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\Web3AgreementNotifyRequest $request
     * @return Model\Web3AgreementNotifyResponse
     * @throws YopClientException
     */
    public function web3AgreementNotify(Model\Web3AgreementNotifyRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\Web3AgreementNotifyRequestMarshaller::getInstance(),
            Model\Web3AgreementNotifyResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\Web3AgreementPaymentCancelRequest $request
     * @return Model\Web3AgreementPaymentCancelResponse
     * @throws YopClientException
     */
    public function web3AgreementPaymentCancel(Model\Web3AgreementPaymentCancelRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\Web3AgreementPaymentCancelRequestMarshaller::getInstance(),
            Model\Web3AgreementPaymentCancelResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\Web3AgreementPaymentQueryRequest $request
     * @return Model\Web3AgreementPaymentQueryResponse
     * @throws YopClientException
     */
    public function web3AgreementPaymentQuery(Model\Web3AgreementPaymentQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantUserNo() == null) {
            throw new YopClientException("request.merchantUserNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\Web3AgreementPaymentQueryRequestMarshaller::getInstance(),
            Model\Web3AgreementPaymentQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\Web3AgreementPaymentSignRequest $request
     * @return Model\Web3AgreementPaymentSignResponse
     * @throws YopClientException
     */
    public function web3AgreementPaymentSign(Model\Web3AgreementPaymentSignRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\Web3AgreementPaymentSignRequestMarshaller::getInstance(),
            Model\Web3AgreementPaymentSignResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\Web3CouponListQueryRequest $request
     * @return Model\Web3CouponListQueryResponse
     * @throws YopClientException
     */
    public function web3CouponListQuery(Model\Web3CouponListQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getMerchantUserNo() == null) {
            throw new YopClientException("request.merchantUserNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getQueryType() == null) {
            throw new YopClientException("request.queryType is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\Web3CouponListQueryRequestMarshaller::getInstance(),
            Model\Web3CouponListQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\Web3PaymentManageRequest $request
     * @return Model\Web3PaymentManageResponse
     * @throws YopClientException
     */
    public function web3PaymentManage(Model\Web3PaymentManageRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\Web3PaymentManageRequestMarshaller::getInstance(),
            Model\Web3PaymentManageResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawInitiateRequest $request
     * @return Model\WithdrawInitiateResponse
     * @throws YopClientException
     */
    public function withdrawInitiate(Model\WithdrawInitiateRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawInitiateRequestMarshaller::getInstance(),
            Model\WithdrawInitiateResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawQueryRequest $request
     * @return Model\WithdrawQueryResponse
     * @throws YopClientException
     */
    public function withdrawQuery(Model\WithdrawQueryRequest $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawQueryRequestMarshaller::getInstance(),
            Model\WithdrawQueryResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawInitiateV10Request $request
     * @return Model\WithdrawInitiateV10Response
     * @throws YopClientException
     */
    public function withdraw_initiate_v1_0(Model\WithdrawInitiateV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawInitiateV10RequestMarshaller::getInstance(),
            Model\WithdrawInitiateV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
    /**
     * @param Model\WithdrawQueryV10Request $request
     * @return Model\WithdrawQueryV10Response
     * @throws YopClientException
     */
    public function withdraw_query_v1_0(Model\WithdrawQueryV10Request $request)
    {
        if ($request == null) {
            throw new YopClientException("request is required.");
        }
        if ($request->getRequestNo() == null) {
            throw new YopClientException("request.requestNo is required.");
        }
        if ($request->getMerchantNo() == null) {
            throw new YopClientException("request.merchantNo is required.");
        }
        if ($request->getParentMerchantNo() == null) {
            throw new YopClientException("request.parentMerchantNo is required.");
        }
        $clientExecutionParams = new ClientExecutionParams($request, Model\WithdrawQueryV10RequestMarshaller::getInstance(),
            Model\WithdrawQueryV10ResponseUnMarshaller::getInstance());
        return $this->clientHandler->execute($clientExecutionParams);
    }
}
