<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListbyusersOapiAttendanceScheduleResponseBody;

use AlibabaCloud\Tea\Model;

class result extends Model {
    protected $_name = [
        'checkType' => 'check_type',
        'planCheckTime' => 'plan_check_time',
        'groupId' => 'group_id',
        'userid' => 'userid',
        'approveId' => 'approve_id',
        'workDate' => 'work_date',
        'id' => 'id',
        'shiftVersion' => 'shift_version',
        'shiftId' => 'shift_id',
        'isRest' => 'is_rest',
    ];
    public function validate() {
        Model::validatePattern('planCheckTime', $this->planCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('workDate', $this->workDate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        if (null !== $this->planCheckTime) {
            $res['plan_check_time'] = $this->planCheckTime;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->approveId) {
            $res['approve_id'] = $this->approveId;
        }
        if (null !== $this->workDate) {
            $res['work_date'] = $this->workDate;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->shiftVersion) {
            $res['shift_version'] = $this->shiftVersion;
        }
        if (null !== $this->shiftId) {
            $res['shift_id'] = $this->shiftId;
        }
        if (null !== $this->isRest) {
            $res['is_rest'] = $this->isRest;
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
        if(isset($map['plan_check_time'])){
            $model->planCheckTime = $map['plan_check_time'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['approve_id'])){
            $model->approveId = $map['approve_id'];
        }
        if(isset($map['work_date'])){
            $model->workDate = $map['work_date'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['shift_version'])){
            $model->shiftVersion = $map['shift_version'];
        }
        if(isset($map['shift_id'])){
            $model->shiftId = $map['shift_id'];
        }
        if(isset($map['is_rest'])){
            $model->isRest = $map['is_rest'];
        }
        return $model;
    }
    /**
     * @description 考勤类型，上班/下班
     * @var string
     */
    public $checkType;

    /**
     * @description 计划打卡时间
     * @var string
     */
    public $planCheckTime;

    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

    /**
     * @description 用户userId
     * @var string
     */
    public $userid;

    /**
     * @description 审批单id
     * @var int
     */
    public $approveId;

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
     * @description 班次id
     * @var int
     */
    public $shiftVersion;

    /**
     * @description 班次版本
     * @var int
     */
    public $shiftId;

    /**
     * @description 是否休息
     * @var string
     */
    public $isRest;

}
