<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiLiveResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiLiveResponseBody\result\liveUrlExt;

class result extends Model {
    protected $_name = [
        'totalViewCount' => 'total_view_count',
        'totalJoinCount' => 'total_join_count',
        'playbackUrl' => 'playback_url',
        'liveUrlHls' => 'live_url_hls',
        'liveUrlExt' => 'live_url_ext',
        'liveUrl' => 'live_url',
        'inputStreamUrl' => 'input_stream_url',
        'timeLength' => 'time_length',
        'endTime' => 'end_time',
        'startTime' => 'start_time',
        'status' => 'status',
        'appointmentTime' => 'appointment_time',
        'uuid' => 'uuid',
        'preVideoPlayUrl' => 'pre_video_play_url',
        'apptEndTime' => 'appt_end_time',
        'apptBeginTime' => 'appt_begin_time',
        'landScape' => 'land_scape',
        'coverUrl' => 'cover_url',
        'shared' => 'shared',
        'intro' => 'intro',
        'title' => 'title',
        'userNick' => 'user_nick',
        'userid' => 'userid',
    ];
    public function validate() {
        Model::validatePattern('endTime', $this->endTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('startTime', $this->startTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('appointmentTime', $this->appointmentTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('apptEndTime', $this->apptEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('apptBeginTime', $this->apptBeginTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->totalViewCount) {
            $res['total_view_count'] = $this->totalViewCount;
        }
        if (null !== $this->totalJoinCount) {
            $res['total_join_count'] = $this->totalJoinCount;
        }
        if (null !== $this->playbackUrl) {
            $res['playback_url'] = $this->playbackUrl;
        }
        if (null !== $this->liveUrlHls) {
            $res['live_url_hls'] = $this->liveUrlHls;
        }
        if (null !== $this->liveUrlExt) {
            $res['live_url_ext'] = null !== $this->liveUrlExt ? $this->liveUrlExt->toMap() : null;
        }
        if (null !== $this->liveUrl) {
            $res['live_url'] = $this->liveUrl;
        }
        if (null !== $this->inputStreamUrl) {
            $res['input_stream_url'] = $this->inputStreamUrl;
        }
        if (null !== $this->timeLength) {
            $res['time_length'] = $this->timeLength;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }
        if (null !== $this->appointmentTime) {
            $res['appointment_time'] = $this->appointmentTime;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->preVideoPlayUrl) {
            $res['pre_video_play_url'] = $this->preVideoPlayUrl;
        }
        if (null !== $this->apptEndTime) {
            $res['appt_end_time'] = $this->apptEndTime;
        }
        if (null !== $this->apptBeginTime) {
            $res['appt_begin_time'] = $this->apptBeginTime;
        }
        if (null !== $this->landScape) {
            $res['land_scape'] = $this->landScape;
        }
        if (null !== $this->coverUrl) {
            $res['cover_url'] = $this->coverUrl;
        }
        if (null !== $this->shared) {
            $res['shared'] = $this->shared;
        }
        if (null !== $this->intro) {
            $res['intro'] = $this->intro;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->userNick) {
            $res['user_nick'] = $this->userNick;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['total_view_count'])){
            $model->totalViewCount = $map['total_view_count'];
        }
        if(isset($map['total_join_count'])){
            $model->totalJoinCount = $map['total_join_count'];
        }
        if(isset($map['playback_url'])){
            $model->playbackUrl = $map['playback_url'];
        }
        if(isset($map['live_url_hls'])){
            $model->liveUrlHls = $map['live_url_hls'];
        }
        if(isset($map['live_url_ext'])){
            $model->liveUrlExt = liveUrlExt::fromMap($map['live_url_ext']);
        }
        if(isset($map['live_url'])){
            $model->liveUrl = $map['live_url'];
        }
        if(isset($map['input_stream_url'])){
            $model->inputStreamUrl = $map['input_stream_url'];
        }
        if(isset($map['time_length'])){
            $model->timeLength = $map['time_length'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['status'])){
            $model->status = $map['status'];
        }
        if(isset($map['appointment_time'])){
            $model->appointmentTime = $map['appointment_time'];
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['pre_video_play_url'])){
            $model->preVideoPlayUrl = $map['pre_video_play_url'];
        }
        if(isset($map['appt_end_time'])){
            $model->apptEndTime = $map['appt_end_time'];
        }
        if(isset($map['appt_begin_time'])){
            $model->apptBeginTime = $map['appt_begin_time'];
        }
        if(isset($map['land_scape'])){
            $model->landScape = $map['land_scape'];
        }
        if(isset($map['cover_url'])){
            $model->coverUrl = $map['cover_url'];
        }
        if(isset($map['shared'])){
            $model->shared = $map['shared'];
        }
        if(isset($map['intro'])){
            $model->intro = $map['intro'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['user_nick'])){
            $model->userNick = $map['user_nick'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 总共访问次数,PV
     * @var int
     */
    public $totalViewCount;

    /**
     * @description 总共参加人数,UV
     * @var int
     */
    public $totalJoinCount;

    /**
     * @description 直播回放地址
     * @var string
     */
    public $playbackUrl;

    /**
     * @description 原始HLS直播地址
     * @var string
     */
    public $liveUrlHls;

    /**
     * @description 转码直播地址
     * @var liveUrlExt
     */
    public $liveUrlExt;

    /**
     * @description 原始直播地址
     * @var string
     */
    public $liveUrl;

    /**
     * @description 推流地址
     * @var string
     */
    public $inputStreamUrl;

    /**
     * @description 直播时长
     * @var int
     */
    public $timeLength;

    /**
     * @description 直播结束时间
     * @var string
     */
    public $endTime;

    /**
     * @description 直播开始时间
     * @var string
     */
    public $startTime;

    /**
     * @description 直播间状态:0 预告, 1 直播中, 2 直播结束
     * @var int
     */
    public $status;

    /**
     * @description 预约直播时间
     * @var string
     */
    public $appointmentTime;

    /**
     * @description 直播UUID
     * @var string
     */
    public $uuid;

    /**
     * @description 预告视频Url
     * @var string
     */
    public $preVideoPlayUrl;

    /**
     * @description 直播计划结束时间
     * @var string
     */
    public $apptEndTime;

    /**
     * @description 直播计划开始时间
     * @var string
     */
    public $apptBeginTime;

    /**
     * @description 横竖屏:false 竖屏, true 横屏(默认)
     * @var bool
     */
    public $landScape;

    /**
     * @description 封面图,16:9长宽比
     * @var string
     */
    public $coverUrl;

    /**
     * @description 直播可观看类型类型:false 受限制的直播, true 公开的直播(默认)
     * @var bool
     */
    public $shared;

    /**
     * @description 简介
     * @var string
     */
    public $intro;

    /**
     * @description 标题
     * @var string
     */
    public $title;

    /**
     * @description 别名
     * @var string
     */
    public $userNick;

    /**
     * @description 主播ID
     * @var string
     */
    public $userid;

}
