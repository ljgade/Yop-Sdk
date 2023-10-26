<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class UnbindResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopUnBindTerminalResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopUnBindTerminalResponseDto';
    }

    /**
     * @param YopUnBindTerminalResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopUnBindTerminalResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
