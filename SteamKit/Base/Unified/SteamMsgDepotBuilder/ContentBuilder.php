<?php
/**
 * Generated by Protobuf protoc plugin.
 *
 * File descriptor : steamclient/steammessages_depotbuilder.steamclient.proto
 */


namespace SteamKit\Base\Unified\SteamMsgDepotBuilder;

/**
 * Protobuf service : SteamKit.Base.Unified.SteamMsgDepotBuilder.ContentBuilder
 */
interface ContentBuilder
{

    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_InitDepotBuild_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_InitDepotBuild_Response
     */
    public function initDepotBuild(\SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_InitDepotBuild_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_StartDepotUpload_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_StartDepotUpload_Response
     */
    public function startDepotUpload(\SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_StartDepotUpload_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_GetMissingDepotChunks_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_GetMissingDepotChunks_Response
     */
    public function getMissingDepotChunks(\SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_GetMissingDepotChunks_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_FinishDepotUpload_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_FinishDepotUpload_Response
     */
    public function finishDepotUpload(\SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_FinishDepotUpload_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_CommitAppBuild_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_CommitAppBuild_Response
     */
    public function commitAppBuild(\SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_CommitAppBuild_Request $input);
    /**
     * @param
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_SignInstallScript_Request
     * $input
     * @return
     * \SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_SignInstallScript_Response
     */
    public function signInstallScript(\SteamKit\Base\Unified\SteamMsgDepotBuilder\CContentBuilder_SignInstallScript_Request $input);

}
