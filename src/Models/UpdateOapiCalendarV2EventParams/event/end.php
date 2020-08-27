<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\UpdateOapiCalendarV2EventParams\event;

use AlibabaCloud\Tea\Model;

class end extends Model {
    protected $_name = [
        'date' => 'date',
        'timestamp' => 'timestamp',
        'timezone' => 'timezone',
    ];
    public function validate() {
        Model::validateMaxLength('date', $this->date, 10);
    }
    public function toMap() {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->timestamp) {
            $res['timestamp'] = $this->timestamp;
        }
        if (null !== $this->timezone) {
            $res['timezone'] = $this->timezone;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return end
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['date'])){
            $model->date = $map['date'];
        }
        if(isset($map['timestamp'])){
            $model->timestamp = $map['timestamp'];
        }
        if(isset($map['timezone'])){
            $model->timezone = $map['timezone'];
        }
        return $model;
    }
    /**
     * @description 日期，全天日程使用，格式必须为'yyyy-mm-dd',和timestamp字段互斥，该字段有值时，则忽略timestamp字段
     * @var string
     */
    public $date;

    /**
     * @description 时间戳，单位为秒。非全天日程使用，与date字段互斥
     * @var int
     */
    public $timestamp;

    /**
     * @description 时区信息，默认为"Asia/Shanghai"。date有值时，timezone 为 UTC；
     * @var string
     */
    public $timezone;

}
