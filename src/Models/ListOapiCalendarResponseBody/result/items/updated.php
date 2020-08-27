<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiCalendarResponseBody\result\items;

use AlibabaCloud\Tea\Model;

class updated extends Model {
    protected $_name = [
        'date' => 'date',
        'timeZone' => 'time_zone',
        'dateTime' => 'date_time',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->timeZone) {
            $res['time_zone'] = $this->timeZone;
        }
        if (null !== $this->dateTime) {
            $res['date_time'] = $this->dateTime;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return updated
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['date'])){
            $model->date = $map['date'];
        }
        if(isset($map['time_zone'])){
            $model->timeZone = $map['time_zone'];
        }
        if(isset($map['date_time'])){
            $model->dateTime = $map['date_time'];
        }
        return $model;
    }
    /**
     * @description 全天事件的时候使用 yyyy-MM-dd（date_time和date不可以同时出现）
     * @var string
     */
    public $date;

    /**
     * @description 时区
     * @var string
     */
    public $timeZone;

    /**
     * @description 时间 'yyyy-MM-ddTHH:mm:ssZ',
     * @var string
     */
    public $dateTime;

}
