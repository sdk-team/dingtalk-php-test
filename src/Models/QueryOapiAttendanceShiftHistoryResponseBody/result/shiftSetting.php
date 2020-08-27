<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceShiftHistoryResponseBody\result;

use AlibabaCloud\Tea\Model;

class shiftSetting extends Model {
    protected $_name = [
        'shiftId' => 'shift_id',
        'gmtModified' => 'gmt_modified',
        'corpId' => 'corp_id',
        'isDeleted' => 'is_deleted',
        'workTimeMinutes' => 'work_time_minutes',
        'id' => 'id',
        'attendDays' => 'attend_days',
        'gmtCreate' => 'gmt_create',
    ];
    public function validate() {
        Model::validatePattern('gmtModified', $this->gmtModified, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
        Model::validatePattern('gmtCreate', $this->gmtCreate, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->shiftId) {
            $res['shift_id'] = $this->shiftId;
        }
        if (null !== $this->gmtModified) {
            $res['gmt_modified'] = $this->gmtModified;
        }
        if (null !== $this->corpId) {
            $res['corp_id'] = $this->corpId;
        }
        if (null !== $this->isDeleted) {
            $res['is_deleted'] = $this->isDeleted;
        }
        if (null !== $this->workTimeMinutes) {
            $res['work_time_minutes'] = $this->workTimeMinutes;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->attendDays) {
            $res['attend_days'] = $this->attendDays;
        }
        if (null !== $this->gmtCreate) {
            $res['gmt_create'] = $this->gmtCreate;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return shiftSetting
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['shift_id'])){
            $model->shiftId = $map['shift_id'];
        }
        if(isset($map['gmt_modified'])){
            $model->gmtModified = $map['gmt_modified'];
        }
        if(isset($map['corp_id'])){
            $model->corpId = $map['corp_id'];
        }
        if(isset($map['is_deleted'])){
            $model->isDeleted = $map['is_deleted'];
        }
        if(isset($map['work_time_minutes'])){
            $model->workTimeMinutes = $map['work_time_minutes'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['attend_days'])){
            $model->attendDays = $map['attend_days'];
        }
        if(isset($map['gmt_create'])){
            $model->gmtCreate = $map['gmt_create'];
        }
        return $model;
    }
    /**
     * @description 班次id
     * @var int
     */
    public $shiftId;

    /**
     * @description 班次变更时间
     * @var string
     */
    public $gmtModified;

    /**
     * @description 企业id
     * @var string
     */
    public $corpId;

    /**
     * @description 删除标记
     * @var string
     */
    public $isDeleted;

    /**
     * @description 工作时长，单位分钟，-1表示关闭该功能
     * @var int
     */
    public $workTimeMinutes;

    /**
     * @description id
     * @var int
     */
    public $id;

    /**
     * @description 该班次对应的出勤天数
     * @var string
     */
    public $attendDays;

    /**
     * @description 创建时间
     * @var string
     */
    public $gmtCreate;

}
