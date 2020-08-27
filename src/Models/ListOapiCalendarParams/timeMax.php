<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarParams;

use AlibabaCloud\Tea\Model;

class timeMax extends Model {
    protected $_name = [
        'dateTime' => 'date_time',
        'timeZone' => 'time_zone',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->dateTime) {
            $res['date_time'] = $this->dateTime;
        }
        if (null !== $this->timeZone) {
            $res['time_zone'] = $this->timeZone;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return timeMax
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['date_time'])){
            $model->dateTime = $map['date_time'];
        }
        if(isset($map['time_zone'])){
            $model->timeZone = $map['time_zone'];
        }
        return $model;
    }
    /**
     * @description 时间 'yyyy-MM-ddTHH:mm:ssZ',
     * @var string
     */
    public $dateTime;

    /**
     * @description 时区
     * @var string
     */
    public $timeZone;

}
