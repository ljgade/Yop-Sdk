<?php
/**
 * QueryCinemaOrderDataBeanDTO
 *
 * PHP version 5
 *
 * @category Class
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 旅游资源
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

namespace Yeepay\Yop\Sdk\Service\TravelResources\Model;

use \ArrayAccess;
use Yeepay\Yop\Sdk\Model\ModelInterface;
use Yeepay\Yop\Sdk\Utils\ObjectSerializer;

/**
 * QueryCinemaOrderDataBeanDTO Class Doc Comment
 *
 * @category Class
 * @description 电影票订单详细信息
 * @package  Yeepay\Yop\Sdk\
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class QueryCinemaOrderDataBeanDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'QueryCinemaOrderDataBeanDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'totalPrice' => 'float',
        'seatsDesc' => 'string',
        'cinemaAddr' => 'string',
        'canUserCancel' => 'bool',
        'language' => 'string',
        'versionTypes' => 'string',
        'cityId' => 'int',
        'pic' => 'string',
        'marketUnitPrice' => 'float',
        'duration' => 'int',
        'showId' => 'int',
        'coupons' => '\Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryCinemaOrderCouponBeanDTO[]',
        'cinemaId' => 'int',
        'cinemaName' => 'string',
        'showEndTime' => 'string',
        'unitPrice' => 'float',
        'subPlatformId' => 'int',
        'orderNo' => 'string',
        'distanceToShow' => 'string',
        'seatsCount' => 'int',
        'showTime' => 'string',
        'platformId' => 'int',
        'userName' => 'string',
        'acceptAdjust' => 'bool',
        'userId' => 'int',
        'userRemark' => 'string',
        'drawMode' => 'int',
        'regionId' => 'int',
        'hallId' => 'int',
        'filmId' => 'int',
        'filmName' => 'string',
        'cinemaCity' => 'string',
        'hallName' => 'string',
        'platformUniqueId' => 'string',
        'commissionPrice' => 'float',
        'createTime' => 'string',
        'updateTime' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'totalPrice' => null,
        'seatsDesc' => null,
        'cinemaAddr' => null,
        'canUserCancel' => null,
        'language' => null,
        'versionTypes' => null,
        'cityId' => 'int32',
        'pic' => null,
        'marketUnitPrice' => null,
        'duration' => 'int32',
        'showId' => 'int32',
        'coupons' => null,
        'cinemaId' => 'int32',
        'cinemaName' => null,
        'showEndTime' => null,
        'unitPrice' => null,
        'subPlatformId' => 'int32',
        'orderNo' => null,
        'distanceToShow' => null,
        'seatsCount' => 'int32',
        'showTime' => null,
        'platformId' => 'int32',
        'userName' => null,
        'acceptAdjust' => null,
        'userId' => 'int32',
        'userRemark' => null,
        'drawMode' => 'int32',
        'regionId' => 'int32',
        'hallId' => 'int32',
        'filmId' => 'int32',
        'filmName' => null,
        'cinemaCity' => null,
        'hallName' => null,
        'platformUniqueId' => null,
        'commissionPrice' => null,
        'createTime' => null,
        'updateTime' => null
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
        'totalPrice' => 'totalPrice',
        'seatsDesc' => 'seatsDesc',
        'cinemaAddr' => 'cinemaAddr',
        'canUserCancel' => 'canUserCancel',
        'language' => 'language',
        'versionTypes' => 'versionTypes',
        'cityId' => 'cityId',
        'pic' => 'pic',
        'marketUnitPrice' => 'marketUnitPrice',
        'duration' => 'duration',
        'showId' => 'showId',
        'coupons' => 'coupons',
        'cinemaId' => 'cinemaId',
        'cinemaName' => 'cinemaName',
        'showEndTime' => 'showEndTime',
        'unitPrice' => 'unitPrice',
        'subPlatformId' => 'subPlatformId',
        'orderNo' => 'orderNo',
        'distanceToShow' => 'distanceToShow',
        'seatsCount' => 'seatsCount',
        'showTime' => 'showTime',
        'platformId' => 'platformId',
        'userName' => 'userName',
        'acceptAdjust' => 'acceptAdjust',
        'userId' => 'userId',
        'userRemark' => 'userRemark',
        'drawMode' => 'drawMode',
        'regionId' => 'regionId',
        'hallId' => 'hallId',
        'filmId' => 'filmId',
        'filmName' => 'filmName',
        'cinemaCity' => 'cinemaCity',
        'hallName' => 'hallName',
        'platformUniqueId' => 'platformUniqueId',
        'commissionPrice' => 'commissionPrice',
        'createTime' => 'createTime',
        'updateTime' => 'updateTime'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'totalPrice' => 'setTotalPrice',
        'seatsDesc' => 'setSeatsDesc',
        'cinemaAddr' => 'setCinemaAddr',
        'canUserCancel' => 'setCanUserCancel',
        'language' => 'setLanguage',
        'versionTypes' => 'setVersionTypes',
        'cityId' => 'setCityId',
        'pic' => 'setPic',
        'marketUnitPrice' => 'setMarketUnitPrice',
        'duration' => 'setDuration',
        'showId' => 'setShowId',
        'coupons' => 'setCoupons',
        'cinemaId' => 'setCinemaId',
        'cinemaName' => 'setCinemaName',
        'showEndTime' => 'setShowEndTime',
        'unitPrice' => 'setUnitPrice',
        'subPlatformId' => 'setSubPlatformId',
        'orderNo' => 'setOrderNo',
        'distanceToShow' => 'setDistanceToShow',
        'seatsCount' => 'setSeatsCount',
        'showTime' => 'setShowTime',
        'platformId' => 'setPlatformId',
        'userName' => 'setUserName',
        'acceptAdjust' => 'setAcceptAdjust',
        'userId' => 'setUserId',
        'userRemark' => 'setUserRemark',
        'drawMode' => 'setDrawMode',
        'regionId' => 'setRegionId',
        'hallId' => 'setHallId',
        'filmId' => 'setFilmId',
        'filmName' => 'setFilmName',
        'cinemaCity' => 'setCinemaCity',
        'hallName' => 'setHallName',
        'platformUniqueId' => 'setPlatformUniqueId',
        'commissionPrice' => 'setCommissionPrice',
        'createTime' => 'setCreateTime',
        'updateTime' => 'setUpdateTime'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'totalPrice' => 'getTotalPrice',
        'seatsDesc' => 'getSeatsDesc',
        'cinemaAddr' => 'getCinemaAddr',
        'canUserCancel' => 'getCanUserCancel',
        'language' => 'getLanguage',
        'versionTypes' => 'getVersionTypes',
        'cityId' => 'getCityId',
        'pic' => 'getPic',
        'marketUnitPrice' => 'getMarketUnitPrice',
        'duration' => 'getDuration',
        'showId' => 'getShowId',
        'coupons' => 'getCoupons',
        'cinemaId' => 'getCinemaId',
        'cinemaName' => 'getCinemaName',
        'showEndTime' => 'getShowEndTime',
        'unitPrice' => 'getUnitPrice',
        'subPlatformId' => 'getSubPlatformId',
        'orderNo' => 'getOrderNo',
        'distanceToShow' => 'getDistanceToShow',
        'seatsCount' => 'getSeatsCount',
        'showTime' => 'getShowTime',
        'platformId' => 'getPlatformId',
        'userName' => 'getUserName',
        'acceptAdjust' => 'getAcceptAdjust',
        'userId' => 'getUserId',
        'userRemark' => 'getUserRemark',
        'drawMode' => 'getDrawMode',
        'regionId' => 'getRegionId',
        'hallId' => 'getHallId',
        'filmId' => 'getFilmId',
        'filmName' => 'getFilmName',
        'cinemaCity' => 'getCinemaCity',
        'hallName' => 'getHallName',
        'platformUniqueId' => 'getPlatformUniqueId',
        'commissionPrice' => 'getCommissionPrice',
        'createTime' => 'getCreateTime',
        'updateTime' => 'getUpdateTime'
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
        $this->container['totalPrice'] = isset($data['totalPrice']) ? $data['totalPrice'] : null;
        $this->container['seatsDesc'] = isset($data['seatsDesc']) ? $data['seatsDesc'] : null;
        $this->container['cinemaAddr'] = isset($data['cinemaAddr']) ? $data['cinemaAddr'] : null;
        $this->container['canUserCancel'] = isset($data['canUserCancel']) ? $data['canUserCancel'] : null;
        $this->container['language'] = isset($data['language']) ? $data['language'] : null;
        $this->container['versionTypes'] = isset($data['versionTypes']) ? $data['versionTypes'] : null;
        $this->container['cityId'] = isset($data['cityId']) ? $data['cityId'] : null;
        $this->container['pic'] = isset($data['pic']) ? $data['pic'] : null;
        $this->container['marketUnitPrice'] = isset($data['marketUnitPrice']) ? $data['marketUnitPrice'] : null;
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['showId'] = isset($data['showId']) ? $data['showId'] : null;
        $this->container['coupons'] = isset($data['coupons']) ? $data['coupons'] : null;
        $this->container['cinemaId'] = isset($data['cinemaId']) ? $data['cinemaId'] : null;
        $this->container['cinemaName'] = isset($data['cinemaName']) ? $data['cinemaName'] : null;
        $this->container['showEndTime'] = isset($data['showEndTime']) ? $data['showEndTime'] : null;
        $this->container['unitPrice'] = isset($data['unitPrice']) ? $data['unitPrice'] : null;
        $this->container['subPlatformId'] = isset($data['subPlatformId']) ? $data['subPlatformId'] : null;
        $this->container['orderNo'] = isset($data['orderNo']) ? $data['orderNo'] : null;
        $this->container['distanceToShow'] = isset($data['distanceToShow']) ? $data['distanceToShow'] : null;
        $this->container['seatsCount'] = isset($data['seatsCount']) ? $data['seatsCount'] : null;
        $this->container['showTime'] = isset($data['showTime']) ? $data['showTime'] : null;
        $this->container['platformId'] = isset($data['platformId']) ? $data['platformId'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['acceptAdjust'] = isset($data['acceptAdjust']) ? $data['acceptAdjust'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['userRemark'] = isset($data['userRemark']) ? $data['userRemark'] : null;
        $this->container['drawMode'] = isset($data['drawMode']) ? $data['drawMode'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['hallId'] = isset($data['hallId']) ? $data['hallId'] : null;
        $this->container['filmId'] = isset($data['filmId']) ? $data['filmId'] : null;
        $this->container['filmName'] = isset($data['filmName']) ? $data['filmName'] : null;
        $this->container['cinemaCity'] = isset($data['cinemaCity']) ? $data['cinemaCity'] : null;
        $this->container['hallName'] = isset($data['hallName']) ? $data['hallName'] : null;
        $this->container['platformUniqueId'] = isset($data['platformUniqueId']) ? $data['platformUniqueId'] : null;
        $this->container['commissionPrice'] = isset($data['commissionPrice']) ? $data['commissionPrice'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['totalPrice'] === null) {
            $invalidProperties[] = "'totalPrice' can't be null";
        }
        if ($this->container['seatsDesc'] === null) {
            $invalidProperties[] = "'seatsDesc' can't be null";
        }
        if ($this->container['cinemaAddr'] === null) {
            $invalidProperties[] = "'cinemaAddr' can't be null";
        }
        if ($this->container['canUserCancel'] === null) {
            $invalidProperties[] = "'canUserCancel' can't be null";
        }
        if ($this->container['language'] === null) {
            $invalidProperties[] = "'language' can't be null";
        }
        if ($this->container['versionTypes'] === null) {
            $invalidProperties[] = "'versionTypes' can't be null";
        }
        if ($this->container['cityId'] === null) {
            $invalidProperties[] = "'cityId' can't be null";
        }
        if ($this->container['pic'] === null) {
            $invalidProperties[] = "'pic' can't be null";
        }
        if ($this->container['duration'] === null) {
            $invalidProperties[] = "'duration' can't be null";
        }
        if ($this->container['showId'] === null) {
            $invalidProperties[] = "'showId' can't be null";
        }
        if ($this->container['cinemaId'] === null) {
            $invalidProperties[] = "'cinemaId' can't be null";
        }
        if ($this->container['cinemaName'] === null) {
            $invalidProperties[] = "'cinemaName' can't be null";
        }
        if ($this->container['showEndTime'] === null) {
            $invalidProperties[] = "'showEndTime' can't be null";
        }
        if ($this->container['unitPrice'] === null) {
            $invalidProperties[] = "'unitPrice' can't be null";
        }
        if ($this->container['orderNo'] === null) {
            $invalidProperties[] = "'orderNo' can't be null";
        }
        if ($this->container['seatsCount'] === null) {
            $invalidProperties[] = "'seatsCount' can't be null";
        }
        if ($this->container['showTime'] === null) {
            $invalidProperties[] = "'showTime' can't be null";
        }
        if ($this->container['platformId'] === null) {
            $invalidProperties[] = "'platformId' can't be null";
        }
        if ($this->container['userName'] === null) {
            $invalidProperties[] = "'userName' can't be null";
        }
        if ($this->container['userId'] === null) {
            $invalidProperties[] = "'userId' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        if ($this->container['hallId'] === null) {
            $invalidProperties[] = "'hallId' can't be null";
        }
        if ($this->container['filmId'] === null) {
            $invalidProperties[] = "'filmId' can't be null";
        }
        if ($this->container['filmName'] === null) {
            $invalidProperties[] = "'filmName' can't be null";
        }
        if ($this->container['cinemaCity'] === null) {
            $invalidProperties[] = "'cinemaCity' can't be null";
        }
        if ($this->container['hallName'] === null) {
            $invalidProperties[] = "'hallName' can't be null";
        }
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
     * Gets totalPrice
     *
     * @return float
     */
    public function getTotalPrice()
    {
        return $this->container['totalPrice'];
    }

    /**
     * Sets totalPrice
     *
     * @param float $totalPrice <pre>票总价</pre>
     *
     * @return $this
     */
    public function setTotalPrice($totalPrice)
    {
        $this->container['totalPrice'] = $totalPrice;

        return $this;
    }

    /**
     * Gets seatsDesc
     *
     * @return string
     */
    public function getSeatsDesc()
    {
        return $this->container['seatsDesc'];
    }

    /**
     * Sets seatsDesc
     *
     * @param string $seatsDesc <pre>seatsDesc</pre>
     *
     * @return $this
     */
    public function setSeatsDesc($seatsDesc)
    {
        $this->container['seatsDesc'] = $seatsDesc;

        return $this;
    }

    /**
     * Gets cinemaAddr
     *
     * @return string
     */
    public function getCinemaAddr()
    {
        return $this->container['cinemaAddr'];
    }

    /**
     * Sets cinemaAddr
     *
     * @param string $cinemaAddr <pre>影院的详细地址</pre>
     *
     * @return $this
     */
    public function setCinemaAddr($cinemaAddr)
    {
        $this->container['cinemaAddr'] = $cinemaAddr;

        return $this;
    }

    /**
     * Gets canUserCancel
     *
     * @return bool
     */
    public function getCanUserCancel()
    {
        return $this->container['canUserCancel'];
    }

    /**
     * Sets canUserCancel
     *
     * @param bool $canUserCancel <pre>用户能否取消订单</pre>
     *
     * @return $this
     */
    public function setCanUserCancel($canUserCancel)
    {
        $this->container['canUserCancel'] = $canUserCancel;

        return $this;
    }

    /**
     * Gets language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->container['language'];
    }

    /**
     * Sets language
     *
     * @param string $language <pre>影片语言</pre>
     *
     * @return $this
     */
    public function setLanguage($language)
    {
        $this->container['language'] = $language;

        return $this;
    }

    /**
     * Gets versionTypes
     *
     * @return string
     */
    public function getVersionTypes()
    {
        return $this->container['versionTypes'];
    }

    /**
     * Sets versionTypes
     *
     * @param string $versionTypes <pre>影片类型</pre>
     *
     * @return $this
     */
    public function setVersionTypes($versionTypes)
    {
        $this->container['versionTypes'] = $versionTypes;

        return $this;
    }

    /**
     * Gets cityId
     *
     * @return int
     */
    public function getCityId()
    {
        return $this->container['cityId'];
    }

    /**
     * Sets cityId
     *
     * @param int $cityId <pre>城市id</pre>
     *
     * @return $this
     */
    public function setCityId($cityId)
    {
        $this->container['cityId'] = $cityId;

        return $this;
    }

    /**
     * Gets pic
     *
     * @return string
     */
    public function getPic()
    {
        return $this->container['pic'];
    }

    /**
     * Sets pic
     *
     * @param string $pic <pre>电影海报URL地址</pre>
     *
     * @return $this
     */
    public function setPic($pic)
    {
        $this->container['pic'] = $pic;

        return $this;
    }

    /**
     * Gets marketUnitPrice
     *
     * @return float
     */
    public function getMarketUnitPrice()
    {
        return $this->container['marketUnitPrice'];
    }

    /**
     * Sets marketUnitPrice
     *
     * @param float $marketUnitPrice <pre>市场价格</pre>
     *
     * @return $this
     */
    public function setMarketUnitPrice($marketUnitPrice)
    {
        $this->container['marketUnitPrice'] = $marketUnitPrice;

        return $this;
    }

    /**
     * Gets duration
     *
     * @return int
     */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
     * Sets duration
     *
     * @param int $duration <pre>播放时长</pre>
     *
     * @return $this
     */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;

        return $this;
    }

    /**
     * Gets showId
     *
     * @return int
     */
    public function getShowId()
    {
        return $this->container['showId'];
    }

    /**
     * Sets showId
     *
     * @param int $showId <pre>场次id</pre>
     *
     * @return $this
     */
    public function setShowId($showId)
    {
        $this->container['showId'] = $showId;

        return $this;
    }

    /**
     * Gets coupons
     *
     * @return \Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryCinemaOrderCouponBeanDTO[]
     */
    public function getCoupons()
    {
        return $this->container['coupons'];
    }

    /**
     * Sets coupons
     *
     * @param \Yeepay\Yop\Sdk\Service\TravelResources\Model\QueryCinemaOrderCouponBeanDTO[] $coupons <pre>券码数组</pre>
     *
     * @return $this
     */
    public function setCoupons($coupons)
    {
        $this->container['coupons'] = $coupons;

        return $this;
    }

    /**
     * Gets cinemaId
     *
     * @return int
     */
    public function getCinemaId()
    {
        return $this->container['cinemaId'];
    }

    /**
     * Sets cinemaId
     *
     * @param int $cinemaId <pre>影院id</pre>
     *
     * @return $this
     */
    public function setCinemaId($cinemaId)
    {
        $this->container['cinemaId'] = $cinemaId;

        return $this;
    }

    /**
     * Gets cinemaName
     *
     * @return string
     */
    public function getCinemaName()
    {
        return $this->container['cinemaName'];
    }

    /**
     * Sets cinemaName
     *
     * @param string $cinemaName <pre>影院名称</pre>
     *
     * @return $this
     */
    public function setCinemaName($cinemaName)
    {
        $this->container['cinemaName'] = $cinemaName;

        return $this;
    }

    /**
     * Gets showEndTime
     *
     * @return string
     */
    public function getShowEndTime()
    {
        return $this->container['showEndTime'];
    }

    /**
     * Sets showEndTime
     *
     * @param string $showEndTime <pre>场次结束时间</pre>
     *
     * @return $this
     */
    public function setShowEndTime($showEndTime)
    {
        $this->container['showEndTime'] = $showEndTime;

        return $this;
    }

    /**
     * Gets unitPrice
     *
     * @return float
     */
    public function getUnitPrice()
    {
        return $this->container['unitPrice'];
    }

    /**
     * Sets unitPrice
     *
     * @param float $unitPrice <pre>票单价</pre>
     *
     * @return $this
     */
    public function setUnitPrice($unitPrice)
    {
        $this->container['unitPrice'] = $unitPrice;

        return $this;
    }

    /**
     * Gets subPlatformId
     *
     * @return int
     */
    public function getSubPlatformId()
    {
        return $this->container['subPlatformId'];
    }

    /**
     * Sets subPlatformId
     *
     * @param int $subPlatformId <pre>子平台id</pre>
     *
     * @return $this
     */
    public function setSubPlatformId($subPlatformId)
    {
        $this->container['subPlatformId'] = $subPlatformId;

        return $this;
    }

    /**
     * Gets orderNo
     *
     * @return string
     */
    public function getOrderNo()
    {
        return $this->container['orderNo'];
    }

    /**
     * Sets orderNo
     *
     * @param string $orderNo <pre>订单号</pre>
     *
     * @return $this
     */
    public function setOrderNo($orderNo)
    {
        $this->container['orderNo'] = $orderNo;

        return $this;
    }

    /**
     * Gets distanceToShow
     *
     * @return string
     */
    public function getDistanceToShow()
    {
        return $this->container['distanceToShow'];
    }

    /**
     * Sets distanceToShow
     *
     * @param string $distanceToShow <pre>距离开场时间</pre>
     *
     * @return $this
     */
    public function setDistanceToShow($distanceToShow)
    {
        $this->container['distanceToShow'] = $distanceToShow;

        return $this;
    }

    /**
     * Gets seatsCount
     *
     * @return int
     */
    public function getSeatsCount()
    {
        return $this->container['seatsCount'];
    }

    /**
     * Sets seatsCount
     *
     * @param int $seatsCount <pre>座位数量</pre>
     *
     * @return $this
     */
    public function setSeatsCount($seatsCount)
    {
        $this->container['seatsCount'] = $seatsCount;

        return $this;
    }

    /**
     * Gets showTime
     *
     * @return string
     */
    public function getShowTime()
    {
        return $this->container['showTime'];
    }

    /**
     * Sets showTime
     *
     * @param string $showTime <pre>场次开始时间</pre>
     *
     * @return $this
     */
    public function setShowTime($showTime)
    {
        $this->container['showTime'] = $showTime;

        return $this;
    }

    /**
     * Gets platformId
     *
     * @return int
     */
    public function getPlatformId()
    {
        return $this->container['platformId'];
    }

    /**
     * Sets platformId
     *
     * @param int $platformId <pre>平台id</pre>
     *
     * @return $this
     */
    public function setPlatformId($platformId)
    {
        $this->container['platformId'] = $platformId;

        return $this;
    }

    /**
     * Gets userName
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
     * Sets userName
     *
     * @param string $userName <pre>userName</pre>
     *
     * @return $this
     */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;

        return $this;
    }

    /**
     * Gets acceptAdjust
     *
     * @return bool
     */
    public function getAcceptAdjust()
    {
        return $this->container['acceptAdjust'];
    }

    /**
     * Sets acceptAdjust
     *
     * @param bool $acceptAdjust <pre>是否接受调坐</pre>
     *
     * @return $this
     */
    public function setAcceptAdjust($acceptAdjust)
    {
        $this->container['acceptAdjust'] = $acceptAdjust;

        return $this;
    }

    /**
     * Gets userId
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
     * Sets userId
     *
     * @param int $userId <pre>用户id</pre>
     *
     * @return $this
     */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;

        return $this;
    }

    /**
     * Gets userRemark
     *
     * @return string
     */
    public function getUserRemark()
    {
        return $this->container['userRemark'];
    }

    /**
     * Sets userRemark
     *
     * @param string $userRemark <pre>用户备注</pre>
     *
     * @return $this
     */
    public function setUserRemark($userRemark)
    {
        $this->container['userRemark'] = $userRemark;

        return $this;
    }

    /**
     * Gets drawMode
     *
     * @return int
     */
    public function getDrawMode()
    {
        return $this->container['drawMode'];
    }

    /**
     * Sets drawMode
     *
     * @param int $drawMode <pre>0:竞价出票(折扣出票) 5:快速出票(非折扣出票)</pre>
     *
     * @return $this
     */
    public function setDrawMode($drawMode)
    {
        $this->container['drawMode'] = $drawMode;

        return $this;
    }

    /**
     * Gets regionId
     *
     * @return int
     */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
     * Sets regionId
     *
     * @param int $regionId <pre>区域id</pre>
     *
     * @return $this
     */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;

        return $this;
    }

    /**
     * Gets hallId
     *
     * @return int
     */
    public function getHallId()
    {
        return $this->container['hallId'];
    }

    /**
     * Sets hallId
     *
     * @param int $hallId <pre>影厅id</pre>
     *
     * @return $this
     */
    public function setHallId($hallId)
    {
        $this->container['hallId'] = $hallId;

        return $this;
    }

    /**
     * Gets filmId
     *
     * @return int
     */
    public function getFilmId()
    {
        return $this->container['filmId'];
    }

    /**
     * Sets filmId
     *
     * @param int $filmId <pre>电影id</pre>
     *
     * @return $this
     */
    public function setFilmId($filmId)
    {
        $this->container['filmId'] = $filmId;

        return $this;
    }

    /**
     * Gets filmName
     *
     * @return string
     */
    public function getFilmName()
    {
        return $this->container['filmName'];
    }

    /**
     * Sets filmName
     *
     * @param string $filmName <pre>影片名称</pre>
     *
     * @return $this
     */
    public function setFilmName($filmName)
    {
        $this->container['filmName'] = $filmName;

        return $this;
    }

    /**
     * Gets cinemaCity
     *
     * @return string
     */
    public function getCinemaCity()
    {
        return $this->container['cinemaCity'];
    }

    /**
     * Sets cinemaCity
     *
     * @param string $cinemaCity <pre>电影的城市</pre>
     *
     * @return $this
     */
    public function setCinemaCity($cinemaCity)
    {
        $this->container['cinemaCity'] = $cinemaCity;

        return $this;
    }

    /**
     * Gets hallName
     *
     * @return string
     */
    public function getHallName()
    {
        return $this->container['hallName'];
    }

    /**
     * Sets hallName
     *
     * @param string $hallName <pre>影厅名称</pre>
     *
     * @return $this
     */
    public function setHallName($hallName)
    {
        $this->container['hallName'] = $hallName;

        return $this;
    }

    /**
     * Gets platformUniqueId
     *
     * @return string
     */
    public function getPlatformUniqueId()
    {
        return $this->container['platformUniqueId'];
    }

    /**
     * Sets platformUniqueId
     *
     * @param string $platformUniqueId <pre>平台唯一用户标识</pre>
     *
     * @return $this
     */
    public function setPlatformUniqueId($platformUniqueId)
    {
        $this->container['platformUniqueId'] = $platformUniqueId;

        return $this;
    }

    /**
     * Gets commissionPrice
     *
     * @return float
     */
    public function getCommissionPrice()
    {
        return $this->container['commissionPrice'];
    }

    /**
     * Sets commissionPrice
     *
     * @param float $commissionPrice <p>佣金</p>
     *
     * @return $this
     */
    public function setCommissionPrice($commissionPrice)
    {
        $this->container['commissionPrice'] = $commissionPrice;

        return $this;
    }

    /**
     * Gets createTime
     *
     * @return string
     */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
     * Sets createTime
     *
     * @param string $createTime <p>资源方创建订单时间</p>
     *
     * @return $this
     */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;

        return $this;
    }

    /**
     * Gets updateTime
     *
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
     * Sets updateTime
     *
     * @param string $updateTime <p>资源方更新订单时间</p>
     *
     * @return $this
     */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;

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

