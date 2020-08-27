<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceShiftParams\shift;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceShiftParams\shift\setting\restBeginTime;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceShiftParams\shift\setting\restEndTime;

class setting extends Model {
    protected $_name = [
        'restBeginTime' => 'rest_begin_time',
        'classId' => 'class_id',
        'isFlexible' => 'is_flexible',
        'corpId' => 'corp_id',
        'isDeleted' => 'is_deleted',
        'restEndTime' => 'rest_end_time',
        'seriousLateMinutes' => 'serious_late_minutes',
        'absenteeismLateMinutes' => 'absenteeism_late_minutes',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->restBeginTime) {
            $res['rest_begin_time'] = null !== $this->restBeginTime ? $this->restBeginTime->toMap() : null;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->isFlexible) {
            $res['is_flexible'] = $this->isFlexible;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->isDeleted) {
            $res['is_deleted'] = $this->isDeleted;
        }
        if (null !== $this->restEndTime) {
            $res['rest_end_time'] = null !== $this->restEndTime ? $this->restEndTime->toMap() : null;
        }
        if (null !== $this->seriousLateMinutes) {
            $res['serious_late_minutes'] = $this->seriousLateMinutes;
        }
        if (null !== $this->absenteeismLateMinutes) {
            $res['absenteeism_late_minutes'] = $this->absenteeismLateMinutes;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return setting
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['rest_begin_time'])){
            $model->restBeginTime = restBeginTime::fromMap($map['rest_begin_time']);
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['is_flexible'])){
            $model->isFlexible = $map['is_flexible'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['is_deleted'])){
            $model->isDeleted = $map['is_deleted'];
        }
        if(isset($map['rest_end_time'])){
            $model->restEndTime = restEndTime::fromMap($map['rest_end_time']);
        }
        if(isset($map['serious_late_minutes'])){
            $model->seriousLateMinutes = $map['serious_late_minutes'];
        }
        if(isset($map['absenteeism_late_minutes'])){
            $model->absenteeismLateMinutes = $map['absenteeism_late_minutes'];
        }
        return $model;
    }
    /**
     * @description 休息开始
     * @var restBeginTime
     */
    public $restBeginTime;

    /**
     * @description 班次id
     * @var int
     */
    public $classId;

    /**
     * @description 是否弹性
     * @var bool
     */
    public $isFlexible;

    /**
     * @description corpId
     * @var string
     */
    public $corpId;

    /**
     * @description 是否删除
     * @var string
     */
    public $isDeleted;

    /**
     * @description 休息结束
     * @var restEndTime
     */
    public $restEndTime;

    /**
     * @description 严重迟到分钟数
     * @var int
     */
    public $seriousLateMinutes;

    /**
     * @description 旷工迟到分钟数
     * @var int
     */
    public $absenteeismLateMinutes;

}
