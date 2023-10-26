<?php


namespace Yeepay\Yop\Sdk\Service\MWallet\Model;


class MemberQueryV10Response extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var QueryMemberInfoResponseDTO
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\MWallet\Model\QueryMemberInfoResponseDTO';
    }

    /**
     * @param QueryMemberInfoResponseDTO $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return QueryMemberInfoResponseDTO
     */
    function getResult()
    {
        return $this->result;
    }
}
