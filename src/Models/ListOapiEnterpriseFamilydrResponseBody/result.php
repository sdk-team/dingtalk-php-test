<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiEnterpriseFamilydrResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'livePlayUserCnt1w' => 'live_play_user_cnt_1w',
        'livePlayUserCnt1d' => 'live_play_user_cnt_1d',
        'liveLaunchSuccUserCnt1w' => 'live_launch_succ_user_cnt_1w',
        'liveLaunchSuccUserCnt1d' => 'live_launch_succ_user_cnt_1d',
        'deptNameLv3' => 'dept_name_lv3',
        'deptNameLv2' => 'dept_name_lv2',
        'statDate' => 'stat_date',
        'corpId' => 'corp_id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->livePlayUserCnt1w) {
            $res['live_play_user_cnt_1w'] = $this->livePlayUserCnt1w;
        }
        if (null !== $this->livePlayUserCnt1d) {
            $res['live_play_user_cnt_1d'] = $this->livePlayUserCnt1d;
        }
        if (null !== $this->liveLaunchSuccUserCnt1w) {
            $res['live_launch_succ_user_cnt_1w'] = $this->liveLaunchSuccUserCnt1w;
        }
        if (null !== $this->liveLaunchSuccUserCnt1d) {
            $res['live_launch_succ_user_cnt_1d'] = $this->liveLaunchSuccUserCnt1d;
        }
        if (null !== $this->deptNameLv3) {
            $res['dept_name_lv3'] = $this->deptNameLv3;
        }
        if (null !== $this->deptNameLv2) {
            $res['dept_name_lv2'] = $this->deptNameLv2;
        }
        if (null !== $this->statDate) {
            $res['stat_date'] = $this->statDate;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['live_play_user_cnt_1w'])){
            $model->livePlayUserCnt1w = $map['live_play_user_cnt_1w'];
        }
        if(isset($map['live_play_user_cnt_1d'])){
            $model->livePlayUserCnt1d = $map['live_play_user_cnt_1d'];
        }
        if(isset($map['live_launch_succ_user_cnt_1w'])){
            $model->liveLaunchSuccUserCnt1w = $map['live_launch_succ_user_cnt_1w'];
        }
        if(isset($map['live_launch_succ_user_cnt_1d'])){
            $model->liveLaunchSuccUserCnt1d = $map['live_launch_succ_user_cnt_1d'];
        }
        if(isset($map['dept_name_lv3'])){
            $model->deptNameLv3 = $map['dept_name_lv3'];
        }
        if(isset($map['dept_name_lv2'])){
            $model->deptNameLv2 = $map['dept_name_lv2'];
        }
        if(isset($map['stat_date'])){
            $model->statDate = $map['stat_date'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        return $model;
    }
    /**
     * @description 最近7天观看直播人数
     * @var string
     */
    public $livePlayUserCnt1w;

    /**
     * @description 最近1天观看直播人数
     * @var string
     */
    public $livePlayUserCnt1d;

    /**
     * @description 最近7天成功发起直播人数
     * @var string
     */
    public $liveLaunchSuccUserCnt1w;

    /**
     * @description 最近1天成功发起直播人数
     * @var string
     */
    public $liveLaunchSuccUserCnt1d;

    /**
     * @description 三级部门名称
     * @var string
     */
    public $deptNameLv3;

    /**
     * @description 二级部门名称
     * @var string
     */
    public $deptNameLv2;

    /**
     * @description 查询时间
     * @var string
     */
    public $statDate;

    /**
     * @description 企业ID
     * @var string
     */
    public $corpId;

}
