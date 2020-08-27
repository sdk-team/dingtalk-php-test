<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavestatusOapiAttendanceResponseBody\result;

use AlibabaCloud\Tea\Model;

class leaveStatus extends Model {
    protected $_name = [
        'durationUnit' => 'duration_unit',
        'durationPercent' => 'duration_percent',
        'endTime' => 'end_time',
        'startTime' => 'start_time',
        'userid' => 'userid',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->durationUnit) {
            $res['duration_unit'] = $this->durationUnit;
        }
        if (null !== $this->durationPercent) {
            $res['duration_percent'] = $this->durationPercent;
        }
        if (null !== $this->endTime) {
            $res['end_time'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['start_time'] = $this->startTime;
        }
        if (null !== $this->userid) {
            $res['userid'] = $this->userid;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return leaveStatus
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['duration_unit'])){
            $model->durationUnit = $map['duration_unit'];
        }
        if(isset($map['duration_percent'])){
            $model->durationPercent = $map['duration_percent'];
        }
        if(isset($map['end_time'])){
            $model->endTime = $map['end_time'];
        }
        if(isset($map['start_time'])){
            $model->startTime = $map['start_time'];
        }
        if(isset($map['userid'])){
            $model->userid = $map['userid'];
        }
        return $model;
    }
    /**
     * @description 请假单位：“percent_day”表示天，“percent_hour”表示小时
     * @var string
     */
    public $durationUnit;

    /**
     * @description 假期时长*100，例如用户请假时长为1天，该值就等于100
     * @var int
     */
    public $durationPercent;

    /**
     * @description 请假结束时间，时间戳
     * @var int
     */
    public $endTime;

    /**
     * @description 请假开始时间，时间戳
     * @var int
     */
    public $startTime;

    /**
     * @description 用户id
     * @var string
     */
    public $userid;

}
