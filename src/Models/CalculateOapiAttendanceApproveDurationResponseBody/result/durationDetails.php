<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\CalculateOapiAttendanceApproveDurationResponseBody\result;

use AlibabaCloud\Tea\Model;

class durationDetails extends Model {
    protected $_name = [
        'date' => 'date',
        'duration' => 'duration',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->duration) {
            $res['duration'] = $this->duration;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return durationDetails
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['date'])){
            $model->date = $map['date'];
        }
        if(isset($map['duration'])){
            $model->duration = $map['duration'];
        }
        return $model;
    }
    /**
     * @description 日期
     * @var string
     */
    public $date;

    /**
     * @description 每日时长
     * @var string
     */
    public $duration;

}
