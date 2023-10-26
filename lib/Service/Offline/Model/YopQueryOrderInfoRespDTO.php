<?php
/**
 * YopQueryOrderInfoRespDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 线下业务
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.13
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Yeepay\Yop\Sdk\Service\Offline\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * YopQueryOrderInfoRespDTO Class Doc Comment
 *
 * @category Class
 * @description 查询POS交易信息响应模型
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class YopQueryOrderInfoRespDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'YopQueryOrderInfoRespDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'terminalNo' => 'string',
        'orderId' => 'string',
        'bankCardNo' => 'string',
        'paySuccessDate' => '\DateTime',
        'payWay' => 'string',
        'uniqueOrderNo' => 'string',
        'purchaseUrl' => 'string',
        'bankId' => 'string',
        'posRequestNo' => 'string',
        'orderAmount' => 'float',
        'merchantNo' => 'string',
        'status' => 'string',
        'businessOrderNo' => 'string',
        'retCode' => 'string',
        'retMsg' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'terminalNo' => null,
        'orderId' => null,
        'bankCardNo' => null,
        'paySuccessDate' => 'date-time',
        'payWay' => null,
        'uniqueOrderNo' => null,
        'purchaseUrl' => null,
        'bankId' => null,
        'posRequestNo' => null,
        'orderAmount' => null,
        'merchantNo' => null,
        'status' => null,
        'businessOrderNo' => null,
        'retCode' => null,
        'retMsg' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'terminalNo' => 'terminalNo',
        'orderId' => 'orderId',
        'bankCardNo' => 'bankCardNo',
        'paySuccessDate' => 'paySuccessDate',
        'payWay' => 'payWay',
        'uniqueOrderNo' => 'uniqueOrderNo',
        'purchaseUrl' => 'purchaseUrl',
        'bankId' => 'bankId',
        'posRequestNo' => 'posRequestNo',
        'orderAmount' => 'orderAmount',
        'merchantNo' => 'merchantNo',
        'status' => 'status',
        'businessOrderNo' => 'businessOrderNo',
        'retCode' => 'retCode',
        'retMsg' => 'retMsg'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'terminalNo' => 'setTerminalNo',
        'orderId' => 'setOrderId',
        'bankCardNo' => 'setBankCardNo',
        'paySuccessDate' => 'setPaySuccessDate',
        'payWay' => 'setPayWay',
        'uniqueOrderNo' => 'setUniqueOrderNo',
        'purchaseUrl' => 'setPurchaseUrl',
        'bankId' => 'setBankId',
        'posRequestNo' => 'setPosRequestNo',
        'orderAmount' => 'setOrderAmount',
        'merchantNo' => 'setMerchantNo',
        'status' => 'setStatus',
        'businessOrderNo' => 'setBusinessOrderNo',
        'retCode' => 'setRetCode',
        'retMsg' => 'setRetMsg'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'terminalNo' => 'getTerminalNo',
        'orderId' => 'getOrderId',
        'bankCardNo' => 'getBankCardNo',
        'paySuccessDate' => 'getPaySuccessDate',
        'payWay' => 'getPayWay',
        'uniqueOrderNo' => 'getUniqueOrderNo',
        'purchaseUrl' => 'getPurchaseUrl',
        'bankId' => 'getBankId',
        'posRequestNo' => 'getPosRequestNo',
        'orderAmount' => 'getOrderAmount',
        'merchantNo' => 'getMerchantNo',
        'status' => 'getStatus',
        'businessOrderNo' => 'getBusinessOrderNo',
        'retCode' => 'getRetCode',
        'retMsg' => 'getRetMsg'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['terminalNo'] = isset($data['terminalNo']) ? $data['terminalNo'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['bankCardNo'] = isset($data['bankCardNo']) ? $data['bankCardNo'] : null;
        $this->container['paySuccessDate'] = isset($data['paySuccessDate']) ? $data['paySuccessDate'] : null;
        $this->container['payWay'] = isset($data['payWay']) ? $data['payWay'] : null;
        $this->container['uniqueOrderNo'] = isset($data['uniqueOrderNo']) ? $data['uniqueOrderNo'] : null;
        $this->container['purchaseUrl'] = isset($data['purchaseUrl']) ? $data['purchaseUrl'] : null;
        $this->container['bankId'] = isset($data['bankId']) ? $data['bankId'] : null;
        $this->container['posRequestNo'] = isset($data['posRequestNo']) ? $data['posRequestNo'] : null;
        $this->container['orderAmount'] = isset($data['orderAmount']) ? $data['orderAmount'] : null;
        $this->container['merchantNo'] = isset($data['merchantNo']) ? $data['merchantNo'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['businessOrderNo'] = isset($data['businessOrderNo']) ? $data['businessOrderNo'] : null;
        $this->container['retCode'] = isset($data['retCode']) ? $data['retCode'] : null;
        $this->container['retMsg'] = isset($data['retMsg']) ? $data['retMsg'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets terminalNo
     *
     * @return string
     */
    public function getTerminalNo()
    {
        return $this->container['terminalNo'];
    }

    /**
     * Sets terminalNo
     *
     * @param string $terminalNo <p>终端号</p>
     *
     * @return $this
     */
    public function setTerminalNo($terminalNo)
    {
        $this->container['terminalNo'] = $terminalNo;

        return $this;
    }

    /**
     * Gets orderId
     *
     * @return string
     */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
     * Sets orderId
     *
     * @param string $orderId <p>商户订单号</p>
     *
     * @return $this
     */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;

        return $this;
    }

    /**
     * Gets bankCardNo
     *
     * @return string
     */
    public function getBankCardNo()
    {
        return $this->container['bankCardNo'];
    }

    /**
     * Sets bankCardNo
     *
     * @param string $bankCardNo <div data-page-id=\"TKcSdEsC1oFw1qx9zQ5czAf1nyc\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-Y3Usd3jbwoCimRxEMzecGfJFnsc\"> <div data-page-id=\"TKcSdEsC1oFw1qx9zQ5czAf1nyc\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-XN8PdTDwEoH7uAxMu2zcfpsPnrc\">银行卡号,掩码</div> </div> </div> </div>
     *
     * @return $this
     */
    public function setBankCardNo($bankCardNo)
    {
        $this->container['bankCardNo'] = $bankCardNo;

        return $this;
    }

    /**
     * Gets paySuccessDate
     *
     * @return \DateTime
     */
    public function getPaySuccessDate()
    {
        return $this->container['paySuccessDate'];
    }

    /**
     * Sets paySuccessDate
     *
     * @param \DateTime $paySuccessDate <div data-page-id=\"TKcSdEsC1oFw1qx9zQ5czAf1nyc\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-TvRXdKvhAoz0ckxkXH2ca84vnCh\">支付成功时间</div> </div>
     *
     * @return $this
     */
    public function setPaySuccessDate($paySuccessDate)
    {
        $this->container['paySuccessDate'] = $paySuccessDate;

        return $this;
    }

    /**
     * Gets payWay
     *
     * @return string
     */
    public function getPayWay()
    {
        return $this->container['payWay'];
    }

    /**
     * Sets payWay
     *
     * @param string $payWay <div data-page-id=\"TKcSdEsC1oFw1qx9zQ5czAf1nyc\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-A7NhddEdgoRaghx3YUTcmMW6nVe\">支付方式</div> </div>
     *
     * @return $this
     */
    public function setPayWay($payWay)
    {
        $this->container['payWay'] = $payWay;

        return $this;
    }

    /**
     * Gets uniqueOrderNo
     *
     * @return string
     */
    public function getUniqueOrderNo()
    {
        return $this->container['uniqueOrderNo'];
    }

    /**
     * Sets uniqueOrderNo
     *
     * @param string $uniqueOrderNo <div data-page-id=\"TKcSdEsC1oFw1qx9zQ5czAf1nyc\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-DygMdmuckoZqHexbep5cjvVLnUA\">支付唯一流水号</div> </div>
     *
     * @return $this
     */
    public function setUniqueOrderNo($uniqueOrderNo)
    {
        $this->container['uniqueOrderNo'] = $uniqueOrderNo;

        return $this;
    }

    /**
     * Gets purchaseUrl
     *
     * @return string
     */
    public function getPurchaseUrl()
    {
        return $this->container['purchaseUrl'];
    }

    /**
     * Sets purchaseUrl
     *
     * @param string $purchaseUrl <div data-page-id=\"TKcSdEsC1oFw1qx9zQ5czAf1nyc\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-NIWHd1rnOo4kcsx9EZDcWTtwnzh\">签购单地址</div> </div>
     *
     * @return $this
     */
    public function setPurchaseUrl($purchaseUrl)
    {
        $this->container['purchaseUrl'] = $purchaseUrl;

        return $this;
    }

    /**
     * Gets bankId
     *
     * @return string
     */
    public function getBankId()
    {
        return $this->container['bankId'];
    }

    /**
     * Sets bankId
     *
     * @param string $bankId <div data-page-id=\"TKcSdEsC1oFw1qx9zQ5czAf1nyc\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-Y3Usd3jbwoCimRxEMzecGfJFnsc\">发卡行编码</div> </div>
     *
     * @return $this
     */
    public function setBankId($bankId)
    {
        $this->container['bankId'] = $bankId;

        return $this;
    }

    /**
     * Gets posRequestNo
     *
     * @return string
     */
    public function getPosRequestNo()
    {
        return $this->container['posRequestNo'];
    }

    /**
     * Sets posRequestNo
     *
     * @param string $posRequestNo <div data-page-id=\"TKcSdEsC1oFw1qx9zQ5czAf1nyc\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-FzGIdfsgOoJB3Zx6Oafc8acnn6U\">终端流水号</div> </div>
     *
     * @return $this
     */
    public function setPosRequestNo($posRequestNo)
    {
        $this->container['posRequestNo'] = $posRequestNo;

        return $this;
    }

    /**
     * Gets orderAmount
     *
     * @return float
     */
    public function getOrderAmount()
    {
        return $this->container['orderAmount'];
    }

    /**
     * Sets orderAmount
     *
     * @param float $orderAmount <div data-page-id=\"TKcSdEsC1oFw1qx9zQ5czAf1nyc\" data-docx-has-block-data=\"false\"> <div class=\"ace-line ace-line old-record-id-XbRLdUm26oHM2FxTOMhcUFfynTb\">订单金额(元)</div> </div>
     *
     * @return $this
     */
    public function setOrderAmount($orderAmount)
    {
        $this->container['orderAmount'] = $orderAmount;

        return $this;
    }

    /**
     * Gets merchantNo
     *
     * @return string
     */
    public function getMerchantNo()
    {
        return $this->container['merchantNo'];
    }

    /**
     * Sets merchantNo
     *
     * @param string $merchantNo <p>收单商编</p>
     *
     * @return $this
     */
    public function setMerchantNo($merchantNo)
    {
        $this->container['merchantNo'] = $merchantNo;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status <p>订单状态</p>
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets businessOrderNo
     *
     * @return string
     */
    public function getBusinessOrderNo()
    {
        return $this->container['businessOrderNo'];
    }

    /**
     * Sets businessOrderNo
     *
     * @param string $businessOrderNo <p>商户业务单号</p>
     *
     * @return $this
     */
    public function setBusinessOrderNo($businessOrderNo)
    {
        $this->container['businessOrderNo'] = $businessOrderNo;

        return $this;
    }

    /**
     * Gets retCode
     *
     * @return string
     */
    public function getRetCode()
    {
        return $this->container['retCode'];
    }

    /**
     * Sets retCode
     *
     * @param string $retCode <p>返回码</p>
     *
     * @return $this
     */
    public function setRetCode($retCode)
    {
        $this->container['retCode'] = $retCode;

        return $this;
    }

    /**
     * Gets retMsg
     *
     * @return string
     */
    public function getRetMsg()
    {
        return $this->container['retMsg'];
    }

    /**
     * Sets retMsg
     *
     * @param string $retMsg <p>返回信息</p>
     *
     * @return $this
     */
    public function setRetMsg($retMsg)
    {
        $this->container['retMsg'] = $retMsg;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

