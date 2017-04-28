<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : tf/econ_gcmessages.proto
 */


namespace SteamKit\Base\GC\TF2\SteamMsgGCEcon;

/**
 * Protobuf enum :
 * SteamKit.Base.GC.TF2.SteamMsgGCEcon.EItemPurgatoryResponse_Refund
 */
class EItemPurgatoryResponse_Refund extends \Protobuf\Enum
{

    /**
     * k_ItemPurgatoryResponse_Refund_Succeeded = 0
     */
    const k_ItemPurgatoryResponse_Refund_Succeeded_VALUE = 0;

    /**
     * k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory = 1
     */
    const k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory_VALUE = 1;

    /**
     * k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem = 2
     */
    const k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem_VALUE = 2;

    /**
     * k_ItemPurgatoryResponse_Refund_Failed_NoSOCache = 3
     */
    const k_ItemPurgatoryResponse_Refund_Failed_NoSOCache_VALUE = 3;

    /**
     * k_ItemPurgatoryResponse_Refund_Failed_NoDetail = 4
     */
    const k_ItemPurgatoryResponse_Refund_Failed_NoDetail_VALUE = 4;

    /**
     * k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI = 5
     */
    const k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI_VALUE = 5;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    protected static $k_ItemPurgatoryResponse_Refund_Succeeded = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    protected static $k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    protected static $k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    protected static $k_ItemPurgatoryResponse_Refund_Failed_NoSOCache = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    protected static $k_ItemPurgatoryResponse_Refund_Failed_NoDetail = null;

    /**
     * @var \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    protected static $k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI = null;

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    public static function k_ItemPurgatoryResponse_Refund_Succeeded()
    {
        if (self::$k_ItemPurgatoryResponse_Refund_Succeeded !== null) {
            return self::$k_ItemPurgatoryResponse_Refund_Succeeded;
        }

        return self::$k_ItemPurgatoryResponse_Refund_Succeeded = new self('k_ItemPurgatoryResponse_Refund_Succeeded', self::k_ItemPurgatoryResponse_Refund_Succeeded_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    public static function k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory()
    {
        if (self::$k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory !== null) {
            return self::$k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory;
        }

        return self::$k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory = new self('k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory', self::k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    public static function k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem()
    {
        if (self::$k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem !== null) {
            return self::$k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem;
        }

        return self::$k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem = new self('k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem', self::k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    public static function k_ItemPurgatoryResponse_Refund_Failed_NoSOCache()
    {
        if (self::$k_ItemPurgatoryResponse_Refund_Failed_NoSOCache !== null) {
            return self::$k_ItemPurgatoryResponse_Refund_Failed_NoSOCache;
        }

        return self::$k_ItemPurgatoryResponse_Refund_Failed_NoSOCache = new self('k_ItemPurgatoryResponse_Refund_Failed_NoSOCache', self::k_ItemPurgatoryResponse_Refund_Failed_NoSOCache_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    public static function k_ItemPurgatoryResponse_Refund_Failed_NoDetail()
    {
        if (self::$k_ItemPurgatoryResponse_Refund_Failed_NoDetail !== null) {
            return self::$k_ItemPurgatoryResponse_Refund_Failed_NoDetail;
        }

        return self::$k_ItemPurgatoryResponse_Refund_Failed_NoDetail = new self('k_ItemPurgatoryResponse_Refund_Failed_NoDetail', self::k_ItemPurgatoryResponse_Refund_Failed_NoDetail_VALUE);
    }

    /**
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    public static function k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI()
    {
        if (self::$k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI !== null) {
            return self::$k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI;
        }

        return self::$k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI = new self('k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI', self::k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI_VALUE);
    }

    /**
     * @param int $value
     * @return \SteamKit\Base\GC\TF2\SteamMsgGCEcon\EItemPurgatoryResponse_Refund
     */
    public static function valueOf($value)
    {
        switch ($value) {
            case 0: return self::k_ItemPurgatoryResponse_Refund_Succeeded();
            case 1: return self::k_ItemPurgatoryResponse_Refund_Failed_ItemNotInPurgatory();
            case 2: return self::k_ItemPurgatoryResponse_Refund_Failed_CouldNotFindItem();
            case 3: return self::k_ItemPurgatoryResponse_Refund_Failed_NoSOCache();
            case 4: return self::k_ItemPurgatoryResponse_Refund_Failed_NoDetail();
            case 5: return self::k_ItemPurgatoryResponse_Refund_Failed_NexonWebAPI();
            default: return null;
        }
    }


}

