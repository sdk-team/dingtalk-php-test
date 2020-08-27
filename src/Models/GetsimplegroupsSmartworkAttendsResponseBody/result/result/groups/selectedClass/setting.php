<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups\selectedClass;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups\selectedClass\setting\restBeginTime;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsSmartworkAttendsResponseBody\result\result\groups\selectedClass\setting\restEndTime;

class setting extends Model {
    protected $_name = [
        'classSettingId' => 'class_setting_id',
        'restBeginTime' => 'rest_begin_time',
        'permitLateMinutes' => 'permit_late_minutes',
        'workTimeMinutes' => 'work_time_minutes',
        'restEndTime' => 'rest_end_time',
        'absenteeismLateMinutes' => 'absenteeism_late_minutes',
        'seriousLateMinutes' => 'serious_late_minutes',
        'isOffDutyFreeCheck' => 'is_off_duty_free_check',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->classSettingId) {
            $res['class_setting_id'] = $this->classSettingId;
        }
        if (null !== $this->restBeginTime) {
            $res['rest_begin_time'] = null !== $this->restBeginTime ? $this->restBeginTime->toMap() : null;
        }
        if (null !== $this->permitLateMinutes) {
            $res['permit_late_minutes'] = $this->permitLateMinutes;
        }
        if (null !== $this->workTimeMinutes) {
            $res['work_time_minutes'] = $this->workTimeMinutes;
        }
        if (null !== $this->restEndTime) {
            $res['rest_end_time'] = null !== $this->restEndTime ? $this->restEndTime->toMap() : null;
        }
        if (null !== $this->absenteeismLateMinutes) {
            $res['absenteeism_late_minutes'] = $this->absenteeismLateMinutes;
        }
        if (null !== $this->seriousLateMinutes) {
            $res['serious_late_minutes'] = $this->seriousLateMinutes;
        }
        if (null !== $this->isOffDutyFreeCheck) {
            $res['is_off_duty_free_check'] = $this->isOffDutyFreeCheck;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return setting
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['class_setting_id'])){
            $model->classSettingId = $map['class_setting_id'];
        }
        if(isset($map['rest_begin_time'])){
            $model->restBeginTime = restBeginTime::fromMap($map['rest_begin_time']);
        }
        if(isset($map['permit_late_minutes'])){
            $model->permitLateMinutes = $map['permit_late_minutes'];
        }
        if(isset($map['work_time_minutes'])){
            $model->workTimeMinutes = $map['work_time_minutes'];
        }
        if(isset($map['rest_end_time'])){
            $model->restEndTime = restEndTime::fromMap($map['rest_end_time']);
        }
        if(isset($map['absenteeism_late_minutes'])){
            $model->absenteeismLateMinutes = $map['absenteeism_late_minutes'];
        }
        if(isset($map['serious_late_minutes'])){
            $model->seriousLateMinutes = $map['serious_late_minutes'];
        }
        if(isset($map['is_off_duty_free_check'])){
            $model->isOffDutyFreeCheck = $map['is_off_duty_free_check'];
        }
        return $model;
    }
    /**
     * @description 考勤组班次id
     * @var int
     */
    public $classSettingId;

    /**
     * @description 休息开始时间，只有一个时间段的班次有
     * @var restBeginTime
     */
    public $restBeginTime;

    /**
     * @description 允许迟到时长，单位分钟
     * @var int
     */
    public $permitLateMinutes;

    /**
     * @description 工作时长，单位分钟，-1表示关闭该功能
     * @var int
     */
    public $workTimeMinutes;

    /**
     * @description 休息结束时间，只有一个时间段的班次有
     * @var restEndTime
     */
    public $restEndTime;

    /**
     * @description 旷工迟到时长,单位分钟
     * @var int
     */
    public $absenteeismLateMinutes;

    /**
     * @description 严重迟到时长,单位分钟
     * @var int
     */
    public $seriousLateMinutes;

    /**
     * @description Y表示下班不强制打卡,N表示下班强制打卡
     * @var string
     */
    public $isOffDutyFreeCheck;

}
