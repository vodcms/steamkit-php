<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : csgo/base_gcmessages.proto
 */


namespace SteamKit\Base\GC\CSGO\SteamMsgGC;

/**
 * Protobuf enum : SteamKit.Base.GC.CSGO.SteamMsgGC.EGCBaseMsg
 */
class EGCBaseMsg extends \Protobuf\Enum
{

    /**
     * k_EMsgGCSystemMessage = 4001
     */
    const k_EMsgGCSystemMessage_VALUE = 4001;

    /**
     * k_EMsgGCReplicateConVars = 4002
     */
    const k_EMsgGCReplicateConVars_VALUE = 4002;

    /**
     * k_EMsgGCConVarUpdated = 4003
     */
    const k_EMsgGCConVarUpdated_VALUE = 4003;

    /**
     * k_EMsgGCInQueue = 4008
     */
    const k_EMsgGCInQueue_VALUE = 4008;

    /**
     * k_EMsgGCInviteToParty = 4501
     */
    const k_EMsgGCInviteToParty_VALUE = 4501;

    /**
     * k_EMsgGCInvitationCreated = 4502
     */
    const k_EMsgGCInvitationCreated_VALUE = 4502;

    /**
     * k_EMsgGCPartyInviteResponse = 4503
     */
    const k_EMsgGCPartyInviteResponse_VALUE = 4503;

    /**
     * k_EMsgGCKickFromParty = 4504
     */
    const k_EMsgGCKickFromParty_VALUE = 4504;

    /**
     * k_EMsgGCLeaveParty = 4505
     */
    const k_EMsgGCLeaveParty_VALUE = 4505;

    /**
     * k_EMsgGCServerAvailable = 4506
     */
    const k_EMsgGCServerAvailable_VALUE = 4506;

    /**
     * k_EMsgGCClientConnectToServer = 4507
     */
    const k_EMsgGCClientConnectToServer_VALUE = 4507;

    /**
     * k_EMsgGCGameServerInfo = 4508
     */
    const k_EMsgGCGameServerInfo_VALUE = 4508;

    /**
     * k_EMsgGCError = 4509
     */
    const k_EMsgGCError_VALUE = 4509;

    /**
     * k_EMsgGCReplay_UploadedToYouTube = 4510
     */
    const k_EMsgGCReplay_UploadedToYouTube_VALUE = 4510;

    /**
     * k_EMsgGCLANServerAvailable = 4511
     */
    const k_EMsgGCLANServerAvailable_VALUE = 4511;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCSystemMessage = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCReplicateConVars = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCConVarUpdated = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCInQueue = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCInviteToParty = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCInvitationCreated = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCPartyInviteResponse = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCKickFromParty = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCLeaveParty = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCServerAvailable = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCClientConnectToServer = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCGameServerInfo = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCError = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCReplay_UploadedToYouTube = null;

    /**
     * @var \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    protected static $k_EMsgGCLANServerAvailable = null;

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCSystemMessage()
    {
        if (self::$k_EMsgGCSystemMessage !== null) {
            return self::$k_EMsgGCSystemMessage;
        }

        return self::$k_EMsgGCSystemMessage = new self('k_EMsgGCSystemMessage', self::k_EMsgGCSystemMessage_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCReplicateConVars()
    {
        if (self::$k_EMsgGCReplicateConVars !== null) {
            return self::$k_EMsgGCReplicateConVars;
        }

        return self::$k_EMsgGCReplicateConVars = new self('k_EMsgGCReplicateConVars', self::k_EMsgGCReplicateConVars_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCConVarUpdated()
    {
        if (self::$k_EMsgGCConVarUpdated !== null) {
            return self::$k_EMsgGCConVarUpdated;
        }

        return self::$k_EMsgGCConVarUpdated = new self('k_EMsgGCConVarUpdated', self::k_EMsgGCConVarUpdated_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCInQueue()
    {
        if (self::$k_EMsgGCInQueue !== null) {
            return self::$k_EMsgGCInQueue;
        }

        return self::$k_EMsgGCInQueue = new self('k_EMsgGCInQueue', self::k_EMsgGCInQueue_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCInviteToParty()
    {
        if (self::$k_EMsgGCInviteToParty !== null) {
            return self::$k_EMsgGCInviteToParty;
        }

        return self::$k_EMsgGCInviteToParty = new self('k_EMsgGCInviteToParty', self::k_EMsgGCInviteToParty_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCInvitationCreated()
    {
        if (self::$k_EMsgGCInvitationCreated !== null) {
            return self::$k_EMsgGCInvitationCreated;
        }

        return self::$k_EMsgGCInvitationCreated = new self('k_EMsgGCInvitationCreated', self::k_EMsgGCInvitationCreated_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCPartyInviteResponse()
    {
        if (self::$k_EMsgGCPartyInviteResponse !== null) {
            return self::$k_EMsgGCPartyInviteResponse;
        }

        return self::$k_EMsgGCPartyInviteResponse = new self('k_EMsgGCPartyInviteResponse', self::k_EMsgGCPartyInviteResponse_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCKickFromParty()
    {
        if (self::$k_EMsgGCKickFromParty !== null) {
            return self::$k_EMsgGCKickFromParty;
        }

        return self::$k_EMsgGCKickFromParty = new self('k_EMsgGCKickFromParty', self::k_EMsgGCKickFromParty_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCLeaveParty()
    {
        if (self::$k_EMsgGCLeaveParty !== null) {
            return self::$k_EMsgGCLeaveParty;
        }

        return self::$k_EMsgGCLeaveParty = new self('k_EMsgGCLeaveParty', self::k_EMsgGCLeaveParty_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCServerAvailable()
    {
        if (self::$k_EMsgGCServerAvailable !== null) {
            return self::$k_EMsgGCServerAvailable;
        }

        return self::$k_EMsgGCServerAvailable = new self('k_EMsgGCServerAvailable', self::k_EMsgGCServerAvailable_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCClientConnectToServer()
    {
        if (self::$k_EMsgGCClientConnectToServer !== null) {
            return self::$k_EMsgGCClientConnectToServer;
        }

        return self::$k_EMsgGCClientConnectToServer = new self('k_EMsgGCClientConnectToServer', self::k_EMsgGCClientConnectToServer_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCGameServerInfo()
    {
        if (self::$k_EMsgGCGameServerInfo !== null) {
            return self::$k_EMsgGCGameServerInfo;
        }

        return self::$k_EMsgGCGameServerInfo = new self('k_EMsgGCGameServerInfo', self::k_EMsgGCGameServerInfo_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCError()
    {
        if (self::$k_EMsgGCError !== null) {
            return self::$k_EMsgGCError;
        }

        return self::$k_EMsgGCError = new self('k_EMsgGCError', self::k_EMsgGCError_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCReplay_UploadedToYouTube()
    {
        if (self::$k_EMsgGCReplay_UploadedToYouTube !== null) {
            return self::$k_EMsgGCReplay_UploadedToYouTube;
        }

        return self::$k_EMsgGCReplay_UploadedToYouTube = new self('k_EMsgGCReplay_UploadedToYouTube', self::k_EMsgGCReplay_UploadedToYouTube_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function k_EMsgGCLANServerAvailable()
    {
        if (self::$k_EMsgGCLANServerAvailable !== null) {
            return self::$k_EMsgGCLANServerAvailable;
        }

        return self::$k_EMsgGCLANServerAvailable = new self('k_EMsgGCLANServerAvailable', self::k_EMsgGCLANServerAvailable_VALUE);
    }

    /**
     * @param int $value
     * @return \SteamKit\Base\GC\CSGO\SteamMsgGC\EGCBaseMsg
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 4001: return self::k_EMsgGCSystemMessage();
            case 4002: return self::k_EMsgGCReplicateConVars();
            case 4003: return self::k_EMsgGCConVarUpdated();
            case 4008: return self::k_EMsgGCInQueue();
            case 4501: return self::k_EMsgGCInviteToParty();
            case 4502: return self::k_EMsgGCInvitationCreated();
            case 4503: return self::k_EMsgGCPartyInviteResponse();
            case 4504: return self::k_EMsgGCKickFromParty();
            case 4505: return self::k_EMsgGCLeaveParty();
            case 4506: return self::k_EMsgGCServerAvailable();
            case 4507: return self::k_EMsgGCClientConnectToServer();
            case 4508: return self::k_EMsgGCGameServerInfo();
            case 4509: return self::k_EMsgGCError();
            case 4510: return self::k_EMsgGCReplay_UploadedToYouTube();
            case 4511: return self::k_EMsgGCLANServerAvailable();
            default: return null;
        }
    }


}

