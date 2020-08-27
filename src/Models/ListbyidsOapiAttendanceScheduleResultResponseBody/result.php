<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyidsOapiAttendanceScheduleResultResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'checkType' => 'check_type',
        'gmtModified' => 'gmt_modified',
        'planCheckTime' => 'plan_check_time',
        'corpId' => 'corp_id',
        'baseCheckTime' => 'base_check_time',
        'groupId' => 'group_id',
        'gmtCreate' => 'gmt_create',
        'userId' => 'user_id',
        'workDate' => 'work_date',
        'id' => 'id',
        'locationResult' => 'location_result',
        'isLegal' => 'is_legal',
        'timeResult' => 'time_result',
        'recordId' => 'record_id',
        'userCheckTime' => 'user_check_time',
        'scheduleId' => 'schedule_id',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('planCheckTime', $this->planCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('baseCheckTime', $this->baseCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('workDate', $this->workDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('userCheckTime', $this->userCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->planCheckTime) {
            $res['plan_check_time'] = $this->planCheckTime;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->baseCheckTime) {
            $res['base_check_time'] = $this->baseCheckTime;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        if (null !== $this->userId) {
            $res['user_id'] = $this->userId;
        }
        if (null !== $this->workDate) {
            $res['work_date'] = $this->workDate;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->locationResult) {
            $res['location_result'] = $this->locationResult;
        }
        if (null !== $this->isLegal) {
            $res['is_legal'] = $this->isLegal;
        }
        if (null !== $this->timeResult) {
            $res['time_result'] = $this->timeResult;
        }
        if (null !== $this->recordId) {
            $res['record_id'] = $this->recordId;
        }
        if (null !== $this->userCheckTime) {
            $res['user_check_time'] = $this->userCheckTime;
        }
        if (null !== $this->scheduleId) {
            $res['schedule_id'] = $this->scheduleId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['plan_check_time'])){
            $model->planCheckTime = $map['plan_check_time'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['base_check_time'])){
            $model->baseCheckTime = $map['base_check_time'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        if(isset($map['user_id'])){
            $model->userId = $map['user_id'];
        }
        if(isset($map['work_date'])){
            $model->workDate = $map['work_date'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['location_result'])){
            $model->locationResult = $map['location_result'];
        }
        if(isset($map['is_legal'])){
            $model->isLegal = $map['is_legal'];
        }
        if(isset($map['time_result'])){
            $model->timeResult = $map['time_result'];
        }
        if(isset($map['record_id'])){
            $model->recordId = $map['record_id'];
        }
        if(isset($map['user_check_time'])){
            $model->userCheckTime = $map['user_check_time'];
        }
        if(isset($map['schedule_id'])){
            $model->scheduleId = $map['schedule_id'];
        }
        return $model;
    }
    /**
     * @description 考勤类型，上班/下班
     * @var string
     */
    public $checkType;

    /**
     * @description 更新时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 计划打卡时间
     * @var string
     */
    public $planCheckTime;

    /**
     * @description 公司id
     * @var string
     */
    public $corpId;

    /**
     * @description 迟到早退线
     * @var string
     */
    public $baseCheckTime;

    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

    /**
     * @description 用户userId
     * @var string
     */
    public $userId;

    /**
     * @description 工作天
     * @var string
     */
    public $workDate;

    /**
     * @description id
     * @var int
     */
    public $id;

    /**
     * @description 位置结果
     * @var string
     */
    public $locationResult;

    /**
     * @description 是否合法
     * @var string
     */
    public $isLegal;

    /**
     * @description 时间结果
     * @var string
     */
    public $timeResult;

    /**
     * @description 打卡记录
     * @var int
     */
    public $recordId;

    /**
     * @description 打卡时间
     * @var string
     */
    public $userCheckTime;

    /**
     * @description 排班id
     * @var int
     */
    public $scheduleId;

}
