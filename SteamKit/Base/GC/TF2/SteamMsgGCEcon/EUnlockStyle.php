<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/econ_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCEcon;

/**
 * Protobuf enum : SteamKit.Base.GC.TF2.SteamMsgGCEcon.EUnlockStyle
 */
class EUnlockStyle extends \Protobuf\Enum
{

    /**
     * k_UnlockStyle_Succeeded = 0
     */
    const k_UnlockStyle_Succeeded_VALUE = 0;

    /**
     * k_UnlockStyle_Failed_PreReq = 1
     */
    const k_UnlockStyle_Failed_PreReq_VALUE = 1;

    /**
     * k_UnlockStyle_Failed_CantAfford = 2
     */
    const k_UnlockStyle_Failed_CantAfford_VALUE = 2;

    /**
     * k_UnlockStyle_Failed_CantCommit = 3
     */
    const k_UnlockStyle_Failed_CantCommit_VALUE = 3;

    /**
     * k_UnlockStyle_Failed_CantLockCache = 4
     */
    const k_UnlockStyle_Failed_CantLockCache_VALUE = 4;

    /**
     * k_UnlockStyle_Failed_CantAffordAttrib = 5
     */
    const k_UnlockStyle_Failed_CantAffordAttrib_VALUE = 5;

    /**
     * k_UnlockStyle_Failed_CantAffordGem = 6
     */
    const k_UnlockStyle_Failed_CantAffordGem_VALUE = 6;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    protected static $k_UnlockStyle_Succeeded = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    protected static $k_UnlockStyle_Failed_PreReq = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    protected static $k_UnlockStyle_Failed_CantAfford = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    protected static $k_UnlockStyle_Failed_CantCommit = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    protected static $k_UnlockStyle_Failed_CantLockCache = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    protected static $k_UnlockStyle_Failed_CantAffordAttrib = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    protected static $k_UnlockStyle_Failed_CantAffordGem = null;

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    public static function k_UnlockStyle_Succeeded()
    {
        if (self::$k_UnlockStyle_Succeeded !== null) {
            return self::$k_UnlockStyle_Succeeded;
        }

        return self::$k_UnlockStyle_Succeeded = new self('k_UnlockStyle_Succeeded', self::k_UnlockStyle_Succeeded_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    public static function k_UnlockStyle_Failed_PreReq()
    {
        if (self::$k_UnlockStyle_Failed_PreReq !== null) {
            return self::$k_UnlockStyle_Failed_PreReq;
        }

        return self::$k_UnlockStyle_Failed_PreReq = new self('k_UnlockStyle_Failed_PreReq', self::k_UnlockStyle_Failed_PreReq_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    public static function k_UnlockStyle_Failed_CantAfford()
    {
        if (self::$k_UnlockStyle_Failed_CantAfford !== null) {
            return self::$k_UnlockStyle_Failed_CantAfford;
        }

        return self::$k_UnlockStyle_Failed_CantAfford = new self('k_UnlockStyle_Failed_CantAfford', self::k_UnlockStyle_Failed_CantAfford_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    public static function k_UnlockStyle_Failed_CantCommit()
    {
        if (self::$k_UnlockStyle_Failed_CantCommit !== null) {
            return self::$k_UnlockStyle_Failed_CantCommit;
        }

        return self::$k_UnlockStyle_Failed_CantCommit = new self('k_UnlockStyle_Failed_CantCommit', self::k_UnlockStyle_Failed_CantCommit_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    public static function k_UnlockStyle_Failed_CantLockCache()
    {
        if (self::$k_UnlockStyle_Failed_CantLockCache !== null) {
            return self::$k_UnlockStyle_Failed_CantLockCache;
        }

        return self::$k_UnlockStyle_Failed_CantLockCache = new self('k_UnlockStyle_Failed_CantLockCache', self::k_UnlockStyle_Failed_CantLockCache_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    public static function k_UnlockStyle_Failed_CantAffordAttrib()
    {
        if (self::$k_UnlockStyle_Failed_CantAffordAttrib !== null) {
            return self::$k_UnlockStyle_Failed_CantAffordAttrib;
        }

        return self::$k_UnlockStyle_Failed_CantAffordAttrib = new self('k_UnlockStyle_Failed_CantAffordAttrib', self::k_UnlockStyle_Failed_CantAffordAttrib_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    public static function k_UnlockStyle_Failed_CantAffordGem()
    {
        if (self::$k_UnlockStyle_Failed_CantAffordGem !== null) {
            return self::$k_UnlockStyle_Failed_CantAffordGem;
        }

        return self::$k_UnlockStyle_Failed_CantAffordGem = new self('k_UnlockStyle_Failed_CantAffordGem', self::k_UnlockStyle_Failed_CantAffordGem_VALUE);
    }

    /**
     * @param int $value
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EUnlockStyle
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::k_UnlockStyle_Succeeded();
            case 1: return self::k_UnlockStyle_Failed_PreReq();
            case 2: return self::k_UnlockStyle_Failed_CantAfford();
            case 3: return self::k_UnlockStyle_Failed_CantCommit();
            case 4: return self::k_UnlockStyle_Failed_CantLockCache();
            case 5: return self::k_UnlockStyle_Failed_CantAffordAttrib();
            case 6: return self::k_UnlockStyle_Failed_CantAffordGem();
            default: return null;
        }
    }


}

