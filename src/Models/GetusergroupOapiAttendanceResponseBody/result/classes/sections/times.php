<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupOapiAttendanceResponseBody\result\classes\sections;

use AlibabaCloud\Tea\Model;

class times extends Model {
    protected $_name = [
        'checkTime' => 'check_time',
        'checkType' => 'check_type',
        'across' => 'across',
        'beginMin' => 'begin_min',
        'endMin' => 'end_min',
    ];
    public function validate() {
        Model::validatePattern('checkTime', $this->checkTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkTime) {
            $res['check_time'] = $this->checkTime;
        }
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        if (null !== $this->across) {
            $res['across'] = $this->across;
        }
        if (null !== $this->beginMin) {
            $res['begin_min'] = $this->beginMin;
        }
        if (null !== $this->endMin) {
            $res['end_min'] = $this->endMin;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return times
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_time'])){
            $model->checkTime = $map['check_time'];
        }
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['across'])){
            $model->across = $map['across'];
        }
        if(isset($map['begin_min'])){
            $model->beginMin = $map['begin_min'];
        }
        if(isset($map['end_min'])){
            $model->endMin = $map['end_min'];
        }
        return $model;
    }
    /**
     * @description 打卡时间
     * @var string
     */
    public $checkTime;

    /**
     * @description 打卡类型OnDuty：上班，OffDuty：下班
     * @var string
     */
    public $checkType;

    /**
     * @description 打卡时间跨几天
     * @var int
     */
    public $across;

    /**
     * @description 允许的最早提前打卡时间，分钟为单位
     * @var int
     */
    public $beginMin;

    /**
     * @description 允许的最晚延后打卡时间，分钟为单位
     * @var int
     */
    public $endMin;

}
