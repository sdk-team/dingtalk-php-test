<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\AddOapiAttendanceShiftParams\shift\setting;

use AlibabaCloud\Tea\Model;

class restBeginTime extends Model {
    protected $_name = [
        'checkType' => 'check_type',
        'checkTime' => 'check_time',
        'freeCheck' => 'free_check',
        'across' => 'across',
    ];
    public function validate() {
        Model::validatePattern('checkTime', $this->checkTime, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->checkType) {
            $res['check_type'] = $this->checkType;
        }
        if (null !== $this->checkTime) {
            $res['check_time'] = $this->checkTime;
        }
        if (null !== $this->freeCheck) {
            $res['free_check'] = $this->freeCheck;
        }
        if (null !== $this->across) {
            $res['across'] = $this->across;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return restBeginTime
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['check_time'])){
            $model->checkTime = $map['check_time'];
        }
        if(isset($map['free_check'])){
            $model->freeCheck = $map['free_check'];
        }
        if(isset($map['across'])){
            $model->across = $map['across'];
        }
        return $model;
    }
    /**
     * @description 类型
     * @var string
     */
    public $checkType;

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

    /**
     * @description 是否跨天
     * @var int
     */
    public $across;

}
