<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceShiftResponseBody\result\sections;

use AlibabaCloud\Tea\Model;

class rests extends Model {
    protected $_name = [
        'checkType' => 'check_type',
        'across' => 'across',
        'checkTime' => 'check_time',
        'id' => 'id',
    ];
    public function validate() {
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
        if (null !== $this->checkTime) {
            $res['check_time'] = $this->checkTime;
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return rests
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['check_type'])){
            $model->checkType = $map['check_type'];
        }
        if(isset($map['across'])){
            $model->across = $map['across'];
        }
        if(isset($map['check_time'])){
            $model->checkTime = $map['check_time'];
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 休息类型
     * @var string
     */
    public $checkType;

    /**
     * @description 是否跨天
     * @var int
     */
    public $across;

    /**
     * @description 休息时间
     * @var string
     */
    public $checkTime;

    /**
     * @description id
     * @var int
     */
    public $id;

}
