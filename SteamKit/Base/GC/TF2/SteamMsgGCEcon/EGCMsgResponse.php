<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/econ_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCEcon;

/**
 * Protobuf enum : SteamKit.Base.GC.TF2.SteamMsgGCEcon.EGCMsgResponse
 */
class EGCMsgResponse extends \Protobuf\Enum
{

    /**
     * k_EGCMsgResponseOK = 0
     */
    const k_EGCMsgResponseOK_VALUE = 0;

    /**
     * k_EGCMsgResponseDenied = 1
     */
    const k_EGCMsgResponseDenied_VALUE = 1;

    /**
     * k_EGCMsgResponseServerError = 2
     */
    const k_EGCMsgResponseServerError_VALUE = 2;

    /**
     * k_EGCMsgResponseTimeout = 3
     */
    const k_EGCMsgResponseTimeout_VALUE = 3;

    /**
     * k_EGCMsgResponseInvalid = 4
     */
    const k_EGCMsgResponseInvalid_VALUE = 4;

    /**
     * k_EGCMsgResponseNoMatch = 5
     */
    const k_EGCMsgResponseNoMatch_VALUE = 5;

    /**
     * k_EGCMsgResponseUnknownError = 6
     */
    const k_EGCMsgResponseUnknownError_VALUE = 6;

    /**
     * k_EGCMsgResponseNotLoggedOn = 7
     */
    const k_EGCMsgResponseNotLoggedOn_VALUE = 7;

    /**
     * k_EGCMsgFailedToCreate = 8
     */
    const k_EGCMsgFailedToCreate_VALUE = 8;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    protected static $k_EGCMsgResponseOK = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    protected static $k_EGCMsgResponseDenied = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    protected static $k_EGCMsgResponseServerError = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    protected static $k_EGCMsgResponseTimeout = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    protected static $k_EGCMsgResponseInvalid = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    protected static $k_EGCMsgResponseNoMatch = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    protected static $k_EGCMsgResponseUnknownError = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    protected static $k_EGCMsgResponseNotLoggedOn = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    protected static $k_EGCMsgFailedToCreate = null;

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function k_EGCMsgResponseOK()
    {
        if (self::$k_EGCMsgResponseOK !== null) {
            return self::$k_EGCMsgResponseOK;
        }

        return self::$k_EGCMsgResponseOK = new self('k_EGCMsgResponseOK', self::k_EGCMsgResponseOK_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function k_EGCMsgResponseDenied()
    {
        if (self::$k_EGCMsgResponseDenied !== null) {
            return self::$k_EGCMsgResponseDenied;
        }

        return self::$k_EGCMsgResponseDenied = new self('k_EGCMsgResponseDenied', self::k_EGCMsgResponseDenied_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function k_EGCMsgResponseServerError()
    {
        if (self::$k_EGCMsgResponseServerError !== null) {
            return self::$k_EGCMsgResponseServerError;
        }

        return self::$k_EGCMsgResponseServerError = new self('k_EGCMsgResponseServerError', self::k_EGCMsgResponseServerError_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function k_EGCMsgResponseTimeout()
    {
        if (self::$k_EGCMsgResponseTimeout !== null) {
            return self::$k_EGCMsgResponseTimeout;
        }

        return self::$k_EGCMsgResponseTimeout = new self('k_EGCMsgResponseTimeout', self::k_EGCMsgResponseTimeout_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function k_EGCMsgResponseInvalid()
    {
        if (self::$k_EGCMsgResponseInvalid !== null) {
            return self::$k_EGCMsgResponseInvalid;
        }

        return self::$k_EGCMsgResponseInvalid = new self('k_EGCMsgResponseInvalid', self::k_EGCMsgResponseInvalid_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function k_EGCMsgResponseNoMatch()
    {
        if (self::$k_EGCMsgResponseNoMatch !== null) {
            return self::$k_EGCMsgResponseNoMatch;
        }

        return self::$k_EGCMsgResponseNoMatch = new self('k_EGCMsgResponseNoMatch', self::k_EGCMsgResponseNoMatch_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function k_EGCMsgResponseUnknownError()
    {
        if (self::$k_EGCMsgResponseUnknownError !== null) {
            return self::$k_EGCMsgResponseUnknownError;
        }

        return self::$k_EGCMsgResponseUnknownError = new self('k_EGCMsgResponseUnknownError', self::k_EGCMsgResponseUnknownError_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function k_EGCMsgResponseNotLoggedOn()
    {
        if (self::$k_EGCMsgResponseNotLoggedOn !== null) {
            return self::$k_EGCMsgResponseNotLoggedOn;
        }

        return self::$k_EGCMsgResponseNotLoggedOn = new self('k_EGCMsgResponseNotLoggedOn', self::k_EGCMsgResponseNotLoggedOn_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function k_EGCMsgFailedToCreate()
    {
        if (self::$k_EGCMsgFailedToCreate !== null) {
            return self::$k_EGCMsgFailedToCreate;
        }

        return self::$k_EGCMsgFailedToCreate = new self('k_EGCMsgFailedToCreate', self::k_EGCMsgFailedToCreate_VALUE);
    }

    /**
     * @param int $value
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EGCMsgResponse
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::k_EGCMsgResponseOK();
            case 1: return self::k_EGCMsgResponseDenied();
            case 2: return self::k_EGCMsgResponseServerError();
            case 3: return self::k_EGCMsgResponseTimeout();
            case 4: return self::k_EGCMsgResponseInvalid();
            case 5: return self::k_EGCMsgResponseNoMatch();
            case 6: return self::k_EGCMsgResponseUnknownError();
            case 7: return self::k_EGCMsgResponseNotLoggedOn();
            case 8: return self::k_EGCMsgFailedToCreate();
            default: return null;
        }
    }


}

