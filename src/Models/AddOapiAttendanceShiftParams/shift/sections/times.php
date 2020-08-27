<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceShiftParams\shift\sections;

use AlibabaCloud\Tea\Model;

class times extends Model {
    protected $_name = [
        'checkType' => 'check_type',
        'across' => 'across',
        'endMin' => 'end_min',
        'checkTime' => 'check_time',
        'freeCheck' => 'free_check',
    ];
    public function validate() {
        Model::validateRequired('checkType', $this->checkType, true);
        Model::validateRequired('across', $this->across, true);
        Model::validateRequired('checkTime', $this->checkTime, true);
        Model::validatePattern('checkTime', $this->checkTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        if (null !== $this->across) {
            $res['across'] = $this->across;
        }
        if (null !== $this->endMin) {
            $res['end_min'] = $this->endMin;
        }
        if (null !== $this->checkTime) {
            $res['check_time'] = $this->checkTime;
        }
        if (null !== $this->freeCheck) {
            $res['free_check'] = $this->freeCheck;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return times
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['across'])){
            $model->across = $map['across'];
        }
        if(isset($map['end_min'])){
            $model->endMin = $map['end_min'];
        }
        if(isset($map['check_time'])){
            $model->checkTime = $map['check_time'];
        }
        if(isset($map['free_check'])){
            $model->freeCheck = $map['free_check'];
        }
        return $model;
    }
    /**
     * @description 类型
     * @var string
     */
    public $checkType;

    /**
     * @description 是否跨天
     * @var int
     */
    public $across;

    /**
     * @description 调整时间
     * @var int
     */
    public $endMin;

    /**
     * @description check时间
     * @var string
     */
    public $checkTime;

    /**
     * @description 是否免打卡
     * @var bool
     */
    public $freeCheck;

}
