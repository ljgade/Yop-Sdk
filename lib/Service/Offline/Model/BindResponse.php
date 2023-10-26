<?php


namespace Yeepay\Yop\Sdk\Service\Offline\Model;


class BindResponse extends \Yeepay\Yop\Sdk\Model\BaseResponse
{
    /**
     * @var YopBindTerminalResponseDto
     */
    private $result;

    function getResultClass()
    {
        return '\Yeepay\Yop\Sdk\Service\Offline\Model\YopBindTerminalResponseDto';
    }

    /**
     * @param YopBindTerminalResponseDto $result
     */
    function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return YopBindTerminalResponseDto
     */
    function getResult()
    {
        return $this->result;
    }
}
