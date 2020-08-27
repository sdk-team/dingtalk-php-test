<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiKacDatavVideoliveResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'liveLaunchSucc5minCnt' => 'live_launch_succ5min_cnt',
        'liveLaunchSuccCnt' => 'live_launch_succ_cnt',
        'livePlayCnt' => 'live_play_cnt',
        'livePlayUserCnt' => 'live_play_user_cnt',
        'liveSuccTimeLen' => 'live_succ_time_len',
        'maxUserCnt' => 'max_user_cnt',
        'watchGroupLiveUserCnt' => 'watch_group_live_user_cnt',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->liveLaunchSucc5minCnt) {
            $res['live_launch_succ5min_cnt'] = $this->liveLaunchSucc5minCnt;
        }
        if (null !== $this->liveLaunchSuccCnt) {
            $res['live_launch_succ_cnt'] = $this->liveLaunchSuccCnt;
        }
        if (null !== $this->livePlayCnt) {
            $res['live_play_cnt'] = $this->livePlayCnt;
        }
        if (null !== $this->livePlayUserCnt) {
            $res['live_play_user_cnt'] = $this->livePlayUserCnt;
        }
        if (null !== $this->liveSuccTimeLen) {
            $res['live_succ_time_len'] = $this->liveSuccTimeLen;
        }
        if (null !== $this->maxUserCnt) {
            $res['max_user_cnt'] = $this->maxUserCnt;
        }
        if (null !== $this->watchGroupLiveUserCnt) {
            $res['watch_group_live_user_cnt'] = $this->watchGroupLiveUserCnt;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['live_launch_succ5min_cnt'])){
            $model->liveLaunchSucc5minCnt = $map['live_launch_succ5min_cnt'];
        }
        if(isset($map['live_launch_succ_cnt'])){
            $model->liveLaunchSuccCnt = $map['live_launch_succ_cnt'];
        }
        if(isset($map['live_play_cnt'])){
            $model->livePlayCnt = $map['live_play_cnt'];
        }
        if(isset($map['live_play_user_cnt'])){
            $model->livePlayUserCnt = $map['live_play_user_cnt'];
        }
        if(isset($map['live_succ_time_len'])){
            $model->liveSuccTimeLen = $map['live_succ_time_len'];
        }
        if(isset($map['max_user_cnt'])){
            $model->maxUserCnt = $map['max_user_cnt'];
        }
        if(isset($map['watch_group_live_user_cnt'])){
            $model->watchGroupLiveUserCnt = $map['watch_group_live_user_cnt'];
        }
        return $model;
    }
    /**
     * @description 成功发起5分钟直播次数
     * @var int
     */
    public $liveLaunchSucc5minCnt;

    /**
     * @description 成功发起直播次数
     * @var int
     */
    public $liveLaunchSuccCnt;

    /**
     * @description 观看直播次数
     * @var int
     */
    public $livePlayCnt;

    /**
     * @description 观看直播人数
     * @var int
     */
    public $livePlayUserCnt;

    /**
     * @description 成功发起直播时长
     * @var string
     */
    public $liveSuccTimeLen;

    /**
     * @description 观看人数最多直播的观看人数
     * @var int
     */
    public $maxUserCnt;

    /**
     * @description 最近一天看直播的人数（包含观看和回放
     * @var int
     */
    public $watchGroupLiveUserCnt;

}
