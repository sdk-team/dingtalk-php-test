<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAttendanceClassResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAttendanceClassResponseBody\result\classSetting\restBeginTime;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetOapiAttendanceClassResponseBody\result\classSetting\restEndTime;

class classSetting extends Model {
    protected $_name = [
        'id' => 'id',
        'classId' => 'class_id',
        'restBeginTime' => 'rest_begin_time',
        'restEndTime' => 'rest_end_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        if (null !== $this->classId) {
            $res['class_id'] = $this->classId;
        }
        if (null !== $this->restBeginTime) {
            $res['rest_begin_time'] = null !== $this->restBeginTime ? $this->restBeginTime->toMap() : null;
        }
        if (null !== $this->restEndTime) {
            $res['rest_end_time'] = null !== $this->restEndTime ? $this->restEndTime->toMap() : null;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return classSetting
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        if(isset($map['class_id'])){
            $model->classId = $map['class_id'];
        }
        if(isset($map['rest_begin_time'])){
            $model->restBeginTime = restBeginTime::fromMap($map['rest_begin_time']);
        }
        if(isset($map['rest_end_time'])){
            $model->restEndTime = restEndTime::fromMap($map['rest_end_time']);
        }
        return $model;
    }
    /**
     * @description classSettingId
     * @var int
     */
    public $id;

    /**
     * @description classId
     * @var int
     */
    public $classId;

    /**
     * @description 休息开始时间
     * @var restBeginTime
     */
    public $restBeginTime;

    /**
     * @description 休息结束时间
     * @var restEndTime
     */
    public $restEndTime;

}
