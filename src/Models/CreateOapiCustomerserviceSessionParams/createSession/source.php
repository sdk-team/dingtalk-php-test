<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiCustomerserviceSessionParams\createSession;

use AlibabaCloud\Tea\Model;

class source extends Model {
    protected $_name = [
        'channel' => 'channel',
        'channelAvatarUrl' => 'channel_avatar_url',
        'channelNick' => 'channel_nick',
        'channelUid' => 'channel_uid',
        'cmsId' => 'cms_id',
        'sessionEndTime' => 'session_end_time',
        'sessionSource' => 'session_source',
        'sessionStartTime' => 'session_start_time',
        'sessionStatus' => 'session_status',
        'sid' => 'sid',
        'summary' => 'summary',
        'channelUserSource' => 'channel_user_source',
    ];
    public function validate() {
        Model::validateRequired('channel', $this->channel, true);
        Model::validateRequired('channelUid', $this->channelUid, true);
        Model::validateRequired('sessionSource', $this->sessionSource, true);
        Model::validateRequired('sid', $this->sid, true);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->channel) {
            $res['channel'] = $this->channel;
        }
        if (null !== $this->channelAvatarUrl) {
            $res['channel_avatar_url'] = $this->channelAvatarUrl;
        }
        if (null !== $this->channelNick) {
            $res['channel_nick'] = $this->channelNick;
        }
        if (null !== $this->channelUid) {
            $res['channel_uid'] = $this->channelUid;
        }
        if (null !== $this->cmsId) {
            $res['cms_id'] = $this->cmsId;
        }
        if (null !== $this->sessionEndTime) {
            $res['session_end_time'] = $this->sessionEndTime;
        }
        if (null !== $this->sessionSource) {
            $res['session_source'] = $this->sessionSource;
        }
        if (null !== $this->sessionStartTime) {
            $res['session_start_time'] = $this->sessionStartTime;
        }
        if (null !== $this->sessionStatus) {
            $res['session_status'] = $this->sessionStatus;
        }
        if (null !== $this->sid) {
            $res['sid'] = $this->sid;
        }
        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
        }
        if (null !== $this->channelUserSource) {
            $res['channel_user_source'] = $this->channelUserSource;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return source
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['channel'])){
            $model->channel = $map['channel'];
        }
        if(isset($map['channel_avatar_url'])){
            $model->channelAvatarUrl = $map['channel_avatar_url'];
        }
        if(isset($map['channel_nick'])){
            $model->channelNick = $map['channel_nick'];
        }
        if(isset($map['channel_uid'])){
            $model->channelUid = $map['channel_uid'];
        }
        if(isset($map['cms_id'])){
            $model->cmsId = $map['cms_id'];
        }
        if(isset($map['session_end_time'])){
            $model->sessionEndTime = $map['session_end_time'];
        }
        if(isset($map['session_source'])){
            $model->sessionSource = $map['session_source'];
        }
        if(isset($map['session_start_time'])){
            $model->sessionStartTime = $map['session_start_time'];
        }
        if(isset($map['session_status'])){
            $model->sessionStatus = $map['session_status'];
        }
        if(isset($map['sid'])){
            $model->sid = $map['sid'];
        }
        if(isset($map['summary'])){
            $model->summary = $map['summary'];
        }
        if(isset($map['channel_user_source'])){
            $model->channelUserSource = $map['channel_user_source'];
        }
        return $model;
    }
    /**
     * @description /**      * H5页面      */     H5(0),     /**      * APP内嵌的链接      */     APP(1),     /**      * 微信小程序      */     WE_CHAT_APPLETS(2),     /**      * 微信公众号      */     WE_CHAT_OFFICIAL_ACCOUNTS(3)
     * @var string
     */
    public $channel;

    /**
     * @description 发起咨询的头像
     * @var string
     */
    public $channelAvatarUrl;

    /**
     * @description 渠道名称
     * @var string
     */
    public $channelNick;

    /**
     * @description 渠道会员id
     * @var string
     */
    public $channelUid;

    /**
     * @description 会员id
     * @var string
     */
    public $cmsId;

    /**
     * @description 会话结束时间
     * @var int
     */
    public $sessionEndTime;

    /**
     * @description 会话来源
     * @var string
     */
    public $sessionSource;

    /**
     * @description 会话开始时间
     * @var int
     */
    public $sessionStartTime;

    /**
     * @description 0会话中，1已结束
     * @var int
     */
    public $sessionStatus;

    /**
     * @description 会话id
     * @var string
     */
    public $sid;

    /**
     * @description 会话摘要
     * @var string
     */
    public $summary;

    /**
     * @description 渠道会员所属的系统
     * @var string
     */
    public $channelUserSource;

}
