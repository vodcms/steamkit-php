<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/steammessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo;

/**
 * Protobuf enum :
 * SteamKit.Base.GC.TF2.SteamMsgBase.CMsgGCRoutingInfo.RoutingMethod
 */
class RoutingMethod extends \Protobuf\Enum
{

    /**
     * RANDOM = 0
     */
    const RANDOM_VALUE = 0;

    /**
     * DISCARD = 1
     */
    const DISCARD_VALUE = 1;

    /**
     * CLIENT_STEAMID = 2
     */
    const CLIENT_STEAMID_VALUE = 2;

    /**
     * PROTOBUF_FIELD_UINT64 = 3
     */
    const PROTOBUF_FIELD_UINT64_VALUE = 3;

    /**
     * WEBAPI_PARAM_UINT64 = 4
     */
    const WEBAPI_PARAM_UINT64_VALUE = 4;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    protected static $RANDOM = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    protected static $DISCARD = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    protected static $CLIENT_STEAMID = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    protected static $PROTOBUF_FIELD_UINT64 = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    protected static $WEBAPI_PARAM_UINT64 = null;

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    public static function RANDOM()
    {
        if (self::$RANDOM !== null) {
            return self::$RANDOM;
        }

        return self::$RANDOM = new self('RANDOM', self::RANDOM_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    public static function DISCARD()
    {
        if (self::$DISCARD !== null) {
            return self::$DISCARD;
        }

        return self::$DISCARD = new self('DISCARD', self::DISCARD_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    public static function CLIENT_STEAMID()
    {
        if (self::$CLIENT_STEAMID !== null) {
            return self::$CLIENT_STEAMID;
        }

        return self::$CLIENT_STEAMID = new self('CLIENT_STEAMID', self::CLIENT_STEAMID_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    public static function PROTOBUF_FIELD_UINT64()
    {
        if (self::$PROTOBUF_FIELD_UINT64 !== null) {
            return self::$PROTOBUF_FIELD_UINT64;
        }

        return self::$PROTOBUF_FIELD_UINT64 = new self('PROTOBUF_FIELD_UINT64', self::PROTOBUF_FIELD_UINT64_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    public static function WEBAPI_PARAM_UINT64()
    {
        if (self::$WEBAPI_PARAM_UINT64 !== null) {
            return self::$WEBAPI_PARAM_UINT64;
        }

        return self::$WEBAPI_PARAM_UINT64 = new self('WEBAPI_PARAM_UINT64', self::WEBAPI_PARAM_UINT64_VALUE);
    }

    /**
     * @param int $value
     * @return \SteamKit\Base\GC\TF2\SteamMsgBase\CMsgGCRoutingInfo\RoutingMethod
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::RANDOM();
            case 1: return self::DISCARD();
            case 2: return self::CLIENT_STEAMID();
            case 3: return self::PROTOBUF_FIELD_UINT64();
            case 4: return self::WEBAPI_PARAM_UINT64();
            default: return null;
        }
    }


}

