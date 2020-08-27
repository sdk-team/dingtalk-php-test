<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListscheduleSmartworkAttendsResponseBody\result\result;

use AlibabaCloud\Tea\Model;

class schedules extends Model {
    protected $_name = [
        'groupId' => 'group_id',
        'planCheckTime' => 'plan_check_time',
        'classId' => 'class_id',
        'userid' => 'userid',
        'checkType' => 'check_type',
        'classSettingId' => 'class_setting_id',
        'approveId' => 'approve_id',
        'planId' => 'plan_id',
    ];
    public function validate() {
        Model::validatePattern('planCheckTime', $this->planCheckTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->groupId) {
            $res['group_id'] = $this->groupId;
        }
        if (null !== $this->planCheckTime) {
            $res['plan_check_time'] = $this->planCheckTime;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        if (null !== $this->classSettingId) {
            $res['class_setting_id'] = $this->classSettingId;
        }
        if (null !== $this->approveId) {
            $res['approve_id'] = $this->approveId;
        }
        if (null !== $this->planId) {
            $res['plan_id'] = $this->planId;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return schedules
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['group_id'])){
            $model->groupId = $map['group_id'];
        }
        if(isset($map['plan_check_time'])){
            $model->planCheckTime = $map['plan_check_time'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['class_setting_id'])){
            $model->classSettingId = $map['class_setting_id'];
        }
        if(isset($map['approve_id'])){
            $model->approveId = $map['approve_id'];
        }
        if(isset($map['plan_id'])){
            $model->planId = $map['plan_id'];
        }
        return $model;
    }
    /**
     * @description 考勤组id
     * @var int
     */
    public $groupId;

    /**
     * @description 打卡时间
     * @var string
     */
    public $planCheckTime;

    /**
     * @description 考勤班次id
     * @var int
     */
    public $classId;

    /**
     * @description userId
     * @var string
     */
    public $userid;

    /**
     * @description 打卡类型，Onduty表示上班打卡，OffDuty表示下班打卡
     * @var string
     */
    public $checkType;

    /**
     * @description 班次配置id，结果集中没有的话表示使用全局班次配置
     * @var int
     */
    public $classSettingId;

    /**
     * @description 审批id,结果集中没有的话表示没有审批单
     * @var int
     */
    public $approveId;

    /**
     * @description 排班id
     * @var int
     */
    public $planId;

}
