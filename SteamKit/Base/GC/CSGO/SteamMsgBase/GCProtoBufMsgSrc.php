<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/steammessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgBase;

/**
 * Protobuf enum : SteamKit.Base.GC.CSGO.SteamMsgBase.GCProtoBufMsgSrc
 */
class GCProtoBufMsgSrc extends \Protobuf\Enum
{

    /**
     * GCProtoBufMsgSrc_Unspecified = 0
     */
    const GCProtoBufMsgSrc_Unspecified_VALUE = 0;

    /**
     * GCProtoBufMsgSrc_FromSystem = 1
     */
    const GCProtoBufMsgSrc_FromSystem_VALUE = 1;

    /**
     * GCProtoBufMsgSrc_FromSteamID = 2
     */
    const GCProtoBufMsgSrc_FromSteamID_VALUE = 2;

    /**
     * GCProtoBufMsgSrc_FromGC = 3
     */
    const GCProtoBufMsgSrc_FromGC_VALUE = 3;

    /**
     * GCProtoBufMsgSrc_ReplySystem = 4
     */
    const GCProtoBufMsgSrc_ReplySystem_VALUE = 4;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    protected static $GCProtoBufMsgSrc_Unspecified = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    protected static $GCProtoBufMsgSrc_FromSystem = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    protected static $GCProtoBufMsgSrc_FromSteamID = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    protected static $GCProtoBufMsgSrc_FromGC = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    protected static $GCProtoBufMsgSrc_ReplySystem = null;

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    public static function GCProtoBufMsgSrc_Unspecified()
    {
        if (self::$GCProtoBufMsgSrc_Unspecified !== null) {
            return self::$GCProtoBufMsgSrc_Unspecified;
        }

        return self::$GCProtoBufMsgSrc_Unspecified = new self('GCProtoBufMsgSrc_Unspecified', self::GCProtoBufMsgSrc_Unspecified_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    public static function GCProtoBufMsgSrc_FromSystem()
    {
        if (self::$GCProtoBufMsgSrc_FromSystem !== null) {
            return self::$GCProtoBufMsgSrc_FromSystem;
        }

        return self::$GCProtoBufMsgSrc_FromSystem = new self('GCProtoBufMsgSrc_FromSystem', self::GCProtoBufMsgSrc_FromSystem_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    public static function GCProtoBufMsgSrc_FromSteamID()
    {
        if (self::$GCProtoBufMsgSrc_FromSteamID !== null) {
            return self::$GCProtoBufMsgSrc_FromSteamID;
        }

        return self::$GCProtoBufMsgSrc_FromSteamID = new self('GCProtoBufMsgSrc_FromSteamID', self::GCProtoBufMsgSrc_FromSteamID_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    public static function GCProtoBufMsgSrc_FromGC()
    {
        if (self::$GCProtoBufMsgSrc_FromGC !== null) {
            return self::$GCProtoBufMsgSrc_FromGC;
        }

        return self::$GCProtoBufMsgSrc_FromGC = new self('GCProtoBufMsgSrc_FromGC', self::GCProtoBufMsgSrc_FromGC_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    public static function GCProtoBufMsgSrc_ReplySystem()
    {
        if (self::$GCProtoBufMsgSrc_ReplySystem !== null) {
            return self::$GCProtoBufMsgSrc_ReplySystem;
        }

        return self::$GCProtoBufMsgSrc_ReplySystem = new self('GCProtoBufMsgSrc_ReplySystem', self::GCProtoBufMsgSrc_ReplySystem_VALUE);
    }

    /**
     * @param int $value
     * @return \SteamKit\Base\GC\CSGO\SteamMsgBase\GCProtoBufMsgSrc
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::GCProtoBufMsgSrc_Unspecified();
            case 1: return self::GCProtoBufMsgSrc_FromSystem();
            case 2: return self::GCProtoBufMsgSrc_FromSteamID();
            case 3: return self::GCProtoBufMsgSrc_FromGC();
            case 4: return self::GCProtoBufMsgSrc_ReplySystem();
            default: return null;
        }
    }


}

