<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_broadcast.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response;

/**
 * Protobuf enum :
 * SteamKit.Base.Unified.SteamMsgBroadcast.CBroadcast_WatchBroadcast_Response.EWatchResponse
 */
class EWatchResponse extends \Protobuf\Enum
{

    /**
     * k_EWatchResponseReady = 1
     */
    const k_EWatchResponseReady_VALUE = 1;

    /**
     * k_EWatchResponseNotAvailable = 2
     */
    const k_EWatchResponseNotAvailable_VALUE = 2;

    /**
     * k_EWatchResponseWaitingForApproval = 3
     */
    const k_EWatchResponseWaitingForApproval_VALUE = 3;

    /**
     * k_EWatchResponseWaitingForStart = 4
     */
    const k_EWatchResponseWaitingForStart_VALUE = 4;

    /**
     * k_EWatchResponseInvalidSession = 5
     */
    const k_EWatchResponseInvalidSession_VALUE = 5;

    /**
     * k_EWatchResponseTooManyBroadcasts = 6
     */
    const k_EWatchResponseTooManyBroadcasts_VALUE = 6;

    /**
     * k_EWatchResponseWaitingForReconnect = 7
     */
    const k_EWatchResponseWaitingForReconnect_VALUE = 7;

    /**
     * k_EWatchResponseSystemNotSupported = 8
     */
    const k_EWatchResponseSystemNotSupported_VALUE = 8;

    /**
     * k_EWatchResponseUserRestricted = 9
     */
    const k_EWatchResponseUserRestricted_VALUE = 9;

    /**
     * k_EWatchResponseClientOutOfDate = 10
     */
    const k_EWatchResponseClientOutOfDate_VALUE = 10;

    /**
     * k_EWatchResponsePoorUploadQuality = 11
     */
    const k_EWatchResponsePoorUploadQuality_VALUE = 11;

    /**
     * k_EWatchResponseMissingSubscription = 12
     */
    const k_EWatchResponseMissingSubscription_VALUE = 12;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseReady = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseNotAvailable = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseWaitingForApproval = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseWaitingForStart = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseInvalidSession = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseTooManyBroadcasts = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseWaitingForReconnect = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseSystemNotSupported = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseUserRestricted = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseClientOutOfDate = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponsePoorUploadQuality = null;

    /**
     * @var \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    protected static $k_EWatchResponseMissingSubscription = null;

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseReady()
    {
        if (self::$k_EWatchResponseReady !== null) {
            return self::$k_EWatchResponseReady;
        }

        return self::$k_EWatchResponseReady = new self('k_EWatchResponseReady', self::k_EWatchResponseReady_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseNotAvailable()
    {
        if (self::$k_EWatchResponseNotAvailable !== null) {
            return self::$k_EWatchResponseNotAvailable;
        }

        return self::$k_EWatchResponseNotAvailable = new self('k_EWatchResponseNotAvailable', self::k_EWatchResponseNotAvailable_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseWaitingForApproval()
    {
        if (self::$k_EWatchResponseWaitingForApproval !== null) {
            return self::$k_EWatchResponseWaitingForApproval;
        }

        return self::$k_EWatchResponseWaitingForApproval = new self('k_EWatchResponseWaitingForApproval', self::k_EWatchResponseWaitingForApproval_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseWaitingForStart()
    {
        if (self::$k_EWatchResponseWaitingForStart !== null) {
            return self::$k_EWatchResponseWaitingForStart;
        }

        return self::$k_EWatchResponseWaitingForStart = new self('k_EWatchResponseWaitingForStart', self::k_EWatchResponseWaitingForStart_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseInvalidSession()
    {
        if (self::$k_EWatchResponseInvalidSession !== null) {
            return self::$k_EWatchResponseInvalidSession;
        }

        return self::$k_EWatchResponseInvalidSession = new self('k_EWatchResponseInvalidSession', self::k_EWatchResponseInvalidSession_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseTooManyBroadcasts()
    {
        if (self::$k_EWatchResponseTooManyBroadcasts !== null) {
            return self::$k_EWatchResponseTooManyBroadcasts;
        }

        return self::$k_EWatchResponseTooManyBroadcasts = new self('k_EWatchResponseTooManyBroadcasts', self::k_EWatchResponseTooManyBroadcasts_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseWaitingForReconnect()
    {
        if (self::$k_EWatchResponseWaitingForReconnect !== null) {
            return self::$k_EWatchResponseWaitingForReconnect;
        }

        return self::$k_EWatchResponseWaitingForReconnect = new self('k_EWatchResponseWaitingForReconnect', self::k_EWatchResponseWaitingForReconnect_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseSystemNotSupported()
    {
        if (self::$k_EWatchResponseSystemNotSupported !== null) {
            return self::$k_EWatchResponseSystemNotSupported;
        }

        return self::$k_EWatchResponseSystemNotSupported = new self('k_EWatchResponseSystemNotSupported', self::k_EWatchResponseSystemNotSupported_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseUserRestricted()
    {
        if (self::$k_EWatchResponseUserRestricted !== null) {
            return self::$k_EWatchResponseUserRestricted;
        }

        return self::$k_EWatchResponseUserRestricted = new self('k_EWatchResponseUserRestricted', self::k_EWatchResponseUserRestricted_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseClientOutOfDate()
    {
        if (self::$k_EWatchResponseClientOutOfDate !== null) {
            return self::$k_EWatchResponseClientOutOfDate;
        }

        return self::$k_EWatchResponseClientOutOfDate = new self('k_EWatchResponseClientOutOfDate', self::k_EWatchResponseClientOutOfDate_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponsePoorUploadQuality()
    {
        if (self::$k_EWatchResponsePoorUploadQuality !== null) {
            return self::$k_EWatchResponsePoorUploadQuality;
        }

        return self::$k_EWatchResponsePoorUploadQuality = new self('k_EWatchResponsePoorUploadQuality', self::k_EWatchResponsePoorUploadQuality_VALUE);
    }

    /**
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function k_EWatchResponseMissingSubscription()
    {
        if (self::$k_EWatchResponseMissingSubscription !== null) {
            return self::$k_EWatchResponseMissingSubscription;
        }

        return self::$k_EWatchResponseMissingSubscription = new self('k_EWatchResponseMissingSubscription', self::k_EWatchResponseMissingSubscription_VALUE);
    }

    /**
     * @param int $value
     * @return \SteamKit\Base\Unified\SteamMsgBroadcast\CBroadcast_WatchBroadcast_Response\EWatchResponse
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 1: return self::k_EWatchResponseReady();
            case 2: return self::k_EWatchResponseNotAvailable();
            case 3: return self::k_EWatchResponseWaitingForApproval();
            case 4: return self::k_EWatchResponseWaitingForStart();
            case 5: return self::k_EWatchResponseInvalidSession();
            case 6: return self::k_EWatchResponseTooManyBroadcasts();
            case 7: return self::k_EWatchResponseWaitingForReconnect();
            case 8: return self::k_EWatchResponseSystemNotSupported();
            case 9: return self::k_EWatchResponseUserRestricted();
            case 10: return self::k_EWatchResponseClientOutOfDate();
            case 11: return self::k_EWatchResponsePoorUploadQuality();
            case 12: return self::k_EWatchResponseMissingSubscription();
            default: return null;
        }
    }


}
