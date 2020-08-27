<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetusergroupOapiAttendanceResponseBody\result\classes\setting;

use AlibabaCloud\Tea\Model;

class restEndTime extends Model {
    protected $_name = [
        'across' => 'across',
        'beginMin' => 'begin_min',
        'endMin' => 'end_min',
        'checkTime' => 'check_time',
        'checkType' => 'check_type',
    ];
    public function validate() {
        Model::validatePattern('checkTime', $this->checkTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->across) {
            $res['across'] = $this->across;
        }
        if (null !== $this->beginMin) {
            $res['begin_min'] = $this->beginMin;
        }
        if (null !== $this->endMin) {
            $res['end_min'] = $this->endMin;
        }
        if (null !== $this->checkTime) {
            $res['check_time'] = $this->checkTime;
        }
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return restEndTime
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['across'])){
            $model->across = $map['across'];
        }
        if(isset($map['begin_min'])){
            $model->beginMin = $map['begin_min'];
        }
        if(isset($map['end_min'])){
            $model->endMin = $map['end_min'];
        }
        if(isset($map['check_time'])){
            $model->checkTime = $map['check_time'];
        }
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        return $model;
    }
    /**
     * @description across
     * @var int
     */
    public $across;

    /**
     * @description beginMin
     * @var int
     */
    public $beginMin;

    /**
     * @description endMin
     * @var int
     */
    public $endMin;

    /**
     * @description 结束时间
     * @var string
     */
    public $checkTime;

    /**
     * @description 类型OnDuty：休息开始，OffDuty：休息结束
     * @var string
     */
    public $checkType;

}
