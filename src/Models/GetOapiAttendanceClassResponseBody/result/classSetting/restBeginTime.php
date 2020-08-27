<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAttendanceClassResponseBody\result\classSetting;

use AlibabaCloud\Tea\Model;

class restBeginTime extends Model {
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
     * @return restBeginTime
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
     * @description 时间
     * @var string
     */
    public $checkTime;

    /**
     * @description 打卡类型枚举（Onduty和OffDuty）
     * @var string
     */
    public $checkType;

    /**
     * @description 是否跨天
     * @var int
     */
    public $across;

    /**
     * @description 允许开始分钟
     * @var int
     */
    public $beginMin;

    /**
     * @description 允许结束分钟
     * @var int
     */
    public $endMin;

}
