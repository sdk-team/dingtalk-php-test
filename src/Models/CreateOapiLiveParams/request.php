<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CreateOapiLiveParams;

use AlibabaCloud\Tea\Model;

class request extends Model {
    protected $_name = [
        'userid' => 'userid',
        'userNick' => 'user_nick',
        'title' => 'title',
        'intro' => 'intro',
        'shared' => 'shared',
        'coverUrl' => 'cover_url',
        'landScape' => 'land_scape',
        'apptBeginTime' => 'appt_begin_time',
        'apptEndTime' => 'appt_end_time',
        'preVideoPlayUrl' => 'pre_video_play_url',
    ];
    public function validate() {
        Model::validateRequired('userid', $this->userid, true);
        Model::validateRequired('title', $this->title, true);
        Model::validatePattern('apptBeginTime', $this->apptBeginTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('apptEndTime', $this->apptEndTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->userNick) {
            $res['user_nick'] = $this->userNick;
        }
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }
        if (null !== $this->intro) {
            $res['intro'] = $this->intro;
        }
        if (null !== $this->shared) {
            $res['shared'] = $this->shared;
        }
        if (null !== $this->coverUrl) {
            $res['cover_url'] = $this->coverUrl;
        }
        if (null !== $this->landScape) {
            $res['land_scape'] = $this->landScape;
        }
        if (null !== $this->apptBeginTime) {
            $res['appt_begin_time'] = $this->apptBeginTime;
        }
        if (null !== $this->apptEndTime) {
            $res['appt_end_time'] = $this->apptEndTime;
        }
        if (null !== $this->preVideoPlayUrl) {
            $res['pre_video_play_url'] = $this->preVideoPlayUrl;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return request
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['user_nick'])){
            $model->userNick = $map['user_nick'];
        }
        if(isset($map['title'])){
            $model->title = $map['title'];
        }
        if(isset($map['intro'])){
            $model->intro = $map['intro'];
        }
        if(isset($map['shared'])){
            $model->shared = $map['shared'];
        }
        if(isset($map['cover_url'])){
            $model->coverUrl = $map['cover_url'];
        }
        if(isset($map['land_scape'])){
            $model->landScape = $map['land_scape'];
        }
        if(isset($map['appt_begin_time'])){
            $model->apptBeginTime = $map['appt_begin_time'];
        }
        if(isset($map['appt_end_time'])){
            $model->apptEndTime = $map['appt_end_time'];
        }
        if(isset($map['pre_video_play_url'])){
            $model->preVideoPlayUrl = $map['pre_video_play_url'];
        }
        return $model;
    }
    /**
     * @description 主播ID,必填
     * @var string
     */
    public $userid;

    /**
     * @description 别名,选填
     * @var string
     */
    public $userNick;

    /**
     * @description 标题,必填
     * @var string
     */
    public $title;

    /**
     * @description 简介,选填
     * @var string
     */
    public $intro;

    /**
     * @description 直播可观看类型类型,必填: false 受限制的直播, true 公开的直播(默认)
     * @var bool
     */
    public $shared;

    /**
     * @description 封面图,选填: 如果不填写, 则采用默认
     * @var string
     */
    public $coverUrl;

    /**
     * @description 横竖屏,选填: false 竖屏, true 横屏(默认)
     * @var bool
     */
    public $landScape;

    /**
     * @description 直播计划开始时间,选填: 如果不填写, 则取当前时间
     * @var string
     */
    public $apptBeginTime;

    /**
     * @description 直播计划结束时间,选填
     * @var string
     */
    public $apptEndTime;

    /**
     * @description 预告视频Url,选填
     * @var string
     */
    public $preVideoPlayUrl;

}
