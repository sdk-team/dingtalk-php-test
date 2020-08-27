<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceShiftHistoryResponseBody\result\sections;

use AlibabaCloud\Tea\Model;

class punches extends Model {
    protected $_name = [
        'checkType' => 'check_type',
        'endMin' => 'end_min',
        'across' => 'across',
        'checkTime' => 'check_time',
        'permitMinutes' => 'permit_minutes',
        'freeCheck' => 'free_check',
        'id' => 'id',
        'beginMin' => 'begin_min',
    ];
    public function validate() {
        Model::validatePattern('checkTime', $this->checkTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        if (null !== $this->endMin) {
            $res['end_min'] = $this->endMin;
        }
        if (null !== $this->across) {
            $res['across'] = $this->across;
        }
        if (null !== $this->checkTime) {
            $res['check_time'] = $this->checkTime;
        }
        if (null !== $this->permitMinutes) {
            $res['permit_minutes'] = $this->permitMinutes;
        }
        if (null !== $this->freeCheck) {
            $res['free_check'] = $this->freeCheck;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->beginMin) {
            $res['begin_min'] = $this->beginMin;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return punches
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['end_min'])){
            $model->endMin = $map['end_min'];
        }
        if(isset($map['across'])){
            $model->across = $map['across'];
        }
        if(isset($map['check_time'])){
            $model->checkTime = $map['check_time'];
        }
        if(isset($map['permit_minutes'])){
            $model->permitMinutes = $map['permit_minutes'];
        }
        if(isset($map['free_check'])){
            $model->freeCheck = $map['free_check'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['begin_min'])){
            $model->beginMin = $map['begin_min'];
        }
        return $model;
    }
    /**
     * @description 打卡类型
     * @var string
     */
    public $checkType;

    /**
     * @description 允许的最晚延后打卡时间，分钟为单位
     * @var int
     */
    public $endMin;

    /**
     * @description 是否跨天
     * @var int
     */
    public $across;

    /**
     * @description 打卡时间
     * @var string
     */
    public $checkTime;

    /**
     * @description 允许早退/迟到的时长
     * @var int
     */
    public $permitMinutes;

    /**
     * @description 是否免打卡
     * @var bool
     */
    public $freeCheck;

    /**
     * @description id
     * @var int
     */
    public $id;

    /**
     * @description 允许的最早提前打卡时间，分钟为单位
     * @var int
     */
    public $beginMin;

}
