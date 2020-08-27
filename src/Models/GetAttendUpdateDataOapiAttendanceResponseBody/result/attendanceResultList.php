<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetAttendUpdateDataOapiAttendanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class attendanceResultList extends Model {
    protected $_name = [
        'recordId' => 'record_id',
        'sourceType' => 'source_type',
        'planCheckTime' => 'plan_check_time',
        'classId' => 'class_id',
        'locationMethod' => 'location_method',
        'locationResult' => 'location_result',
        'outsideRemark' => 'outside_remark',
        'planId' => 'plan_id',
        'userAddress' => 'user_address',
        'groupId' => 'group_id',
        'userCheckTime' => 'user_check_time',
        'procInstId' => 'procInst_id',
        'checkType' => 'check_type',
        'timeResult' => 'time_result',
    ];
    public function validate() {
        Model::validatePattern('planCheckTime', $this->planCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('userCheckTime', $this->userCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->recordId) {
            $res['record_id'] = $this->recordId;
        }
        if (null !== $this->sourceType) {
            $res['source_type'] = $this->sourceType;
        }
        if (null !== $this->planCheckTime) {
            $res['plan_check_time'] = $this->planCheckTime;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->locationMethod) {
            $res['location_method'] = $this->locationMethod;
        }
        if (null !== $this->locationResult) {
            $res['location_result'] = $this->locationResult;
        }
        if (null !== $this->outsideRemark) {
            $res['outside_remark'] = $this->outsideRemark;
        }
        if (null !== $this->planId) {
            $res['plan_id'] = $this->planId;
        }
        if (null !== $this->userAddress) {
            $res['user_address'] = $this->userAddress;
        }
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->userCheckTime) {
            $res['user_check_time'] = $this->userCheckTime;
        }
        if (null !== $this->procInstId) {
            $res['procInst_id'] = $this->procInstId;
        }
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        if (null !== $this->timeResult) {
            $res['time_result'] = $this->timeResult;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return attendanceResultList
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['record_id'])){
            $model->recordId = $map['record_id'];
        }
        if(isset($map['source_type'])){
            $model->sourceType = $map['source_type'];
        }
        if(isset($map['plan_check_time'])){
            $model->planCheckTime = $map['plan_check_time'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['location_method'])){
            $model->locationMethod = $map['location_method'];
        }
        if(isset($map['location_result'])){
            $model->locationResult = $map['location_result'];
        }
        if(isset($map['outside_remark'])){
            $model->outsideRemark = $map['outside_remark'];
        }
        if(isset($map['plan_id'])){
            $model->planId = $map['plan_id'];
        }
        if(isset($map['user_address'])){
            $model->userAddress = $map['user_address'];
        }
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['user_check_time'])){
            $model->userCheckTime = $map['user_check_time'];
        }
        if(isset($map['procInst_id'])){
            $model->procInstId = $map['procInst_id'];
        }
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['time_result'])){
            $model->timeResult = $map['time_result'];
        }
        return $model;
    }
    /**
     * @description 打卡流水id
     * @var int
     */
    public $recordId;

    /**
     * @description 打卡来源
     * @var string
     */
    public $sourceType;

    /**
     * @description 标准打卡时间
     * @var string
     */
    public $planCheckTime;

    /**
     * @description 班次id
     * @var int
     */
    public $classId;

    /**
     * @description 定位方法
     * @var string
     */
    public $locationMethod;

    /**
     * @description 定位结果
     * @var string
     */
    public $locationResult;

    /**
     * @description 外勤备注
     * @var string
     */
    public $outsideRemark;

    /**
     * @description 排班id
     * @var int
     */
    public $planId;

    /**
     * @description 用户打卡地址
     * @var string
     */
    public $userAddress;

    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

    /**
     * @description 用户打卡时间
     * @var string
     */
    public $userCheckTime;

    /**
     * @description 审批单id
     * @var string
     */
    public $procInstId;

    /**
     * @description 打卡类型 上班还是下班
     * @var string
     */
    public $checkType;

    /**
     * @description 打卡的时间结果
     * @var string
     */
    public $timeResult;

}
