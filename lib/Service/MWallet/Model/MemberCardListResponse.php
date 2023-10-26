<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class MemberCardListResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var MemberQueryBindCardListResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\MemberQueryBindCardListResponseDTO';
    }

    /**
     * @param MemberQueryBindCardListResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return MemberQueryBindCardListResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
