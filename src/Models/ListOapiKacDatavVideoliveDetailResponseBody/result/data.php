<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiKacDatavVideoliveDetailResponseBody\result;

use AlibabaCloud\Tea\Model;

class data extends Model {
    protected $_name = [
        'cid' => 'cid',
        'groupName' => 'group_name',
        'groupUserCount' => 'group_user_count',
        'liveWatchCount' => 'live_watch_count',
        'liveWatchDuration' => 'live_watch_duration',
        'liveWatchEndTime' => 'live_watch_end_time',
        'liveWatchStartTime' => 'live_watch_start_time',
        'liveWatchTitle' => 'live_watch_title',
        'liveWatchUserCount' => 'live_watch_user_count',
        'userid' => 'userid',
        'staffName' => 'staff_name',
        'uuid' => 'uuid',
        'deptId' => 'dept_id',
        'deptName' => 'dept_name',
        'staffJobNum' => 'staff_job_num',
        'liveWatchDurationMin' => 'live_watch_duration_min',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->cid) {
            $res['cid'] = $this->cid;
        }
        if (null !== $this->groupName) {
            $res['group_name'] = $this->groupName;
        }
        if (null !== $this->groupUserCount) {
            $res['group_user_count'] = $this->groupUserCount;
        }
        if (null !== $this->liveWatchCount) {
            $res['live_watch_count'] = $this->liveWatchCount;
        }
        if (null !== $this->liveWatchDuration) {
            $res['live_watch_duration'] = $this->liveWatchDuration;
        }
        if (null !== $this->liveWatchEndTime) {
            $res['live_watch_end_time'] = $this->liveWatchEndTime;
        }
        if (null !== $this->liveWatchStartTime) {
            $res['live_watch_start_time'] = $this->liveWatchStartTime;
        }
        if (null !== $this->liveWatchTitle) {
            $res['live_watch_title'] = $this->liveWatchTitle;
        }
        if (null !== $this->liveWatchUserCount) {
            $res['live_watch_user_count'] = $this->liveWatchUserCount;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->staffName) {
            $res['staff_name'] = $this->staffName;
        }
        if (null !== $this->uuid) {
            $res['uuid'] = $this->uuid;
        }
        if (null !== $this->deptId) {
            $res['dept_id'] = $this->deptId;
        }
        if (null !== $this->deptName) {
            $res['dept_name'] = $this->deptName;
        }
        if (null !== $this->staffJobNum) {
            $res['staff_job_num'] = $this->staffJobNum;
        }
        if (null !== $this->liveWatchDurationMin) {
            $res['live_watch_duration_min'] = $this->liveWatchDurationMin;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return data
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['cid'])){
            $model->cid = $map['cid'];
        }
        if(isset($map['group_name'])){
            $model->groupName = $map['group_name'];
        }
        if(isset($map['group_user_count'])){
            $model->groupUserCount = $map['group_user_count'];
        }
        if(isset($map['live_watch_count'])){
            $model->liveWatchCount = $map['live_watch_count'];
        }
        if(isset($map['live_watch_duration'])){
            $model->liveWatchDuration = $map['live_watch_duration'];
        }
        if(isset($map['live_watch_end_time'])){
            $model->liveWatchEndTime = $map['live_watch_end_time'];
        }
        if(isset($map['live_watch_start_time'])){
            $model->liveWatchStartTime = $map['live_watch_start_time'];
        }
        if(isset($map['live_watch_title'])){
            $model->liveWatchTitle = $map['live_watch_title'];
        }
        if(isset($map['live_watch_user_count'])){
            $model->liveWatchUserCount = $map['live_watch_user_count'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['staff_name'])){
            $model->staffName = $map['staff_name'];
        }
        if(isset($map['uuid'])){
            $model->uuid = $map['uuid'];
        }
        if(isset($map['dept_id'])){
            $model->deptId = $map['dept_id'];
        }
        if(isset($map['dept_name'])){
            $model->deptName = $map['dept_name'];
        }
        if(isset($map['staff_job_num'])){
            $model->staffJobNum = $map['staff_job_num'];
        }
        if(isset($map['live_watch_duration_min'])){
            $model->liveWatchDurationMin = $map['live_watch_duration_min'];
        }
        return $model;
    }
    /**
     * @description 直播群cid
     * @var string
     */
    public $cid;

    /**
     * @description 直播群名称
     * @var string
     */
    public $groupName;

    /**
     * @description 群人数
     * @var int
     */
    public $groupUserCount;

    /**
     * @description 观看直播次数
     * @var int
     */
    public $liveWatchCount;

    /**
     * @description 直播时长（秒）
     * @var string
     */
    public $liveWatchDuration;

    /**
     * @description 直播结束时间
     * @var string
     */
    public $liveWatchEndTime;

    /**
     * @description 直播开始时间
     * @var string
     */
    public $liveWatchStartTime;

    /**
     * @description 直播标题
     * @var string
     */
    public $liveWatchTitle;

    /**
     * @description 观看直播人数
     * @var int
     */
    public $liveWatchUserCount;

    /**
     * @description 员工在当前企业内的唯一标识，也称staffId。可由企业在创建时指定，并代表一定含义比如工号，创建后不可修改
     * @var string
     */
    public $userid;

    /**
     * @description 直播发起人用户名称
     * @var string
     */
    public $staffName;

    /**
     * @description 直播uuid
     * @var string
     */
    public $uuid;

    /**
     * @description 部门ID
     * @var int
     */
    public $deptId;

    /**
     * @description 部门名称
     * @var string
     */
    public $deptName;

    /**
     * @description 直播发起人员工工号
     * @var string
     */
    public $staffJobNum;

    /**
     * @description 直播时长（分钟）
     * @var string
     */
    public $liveWatchDurationMin;

}
