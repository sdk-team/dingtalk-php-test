<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavetimebynamesOapiAttendanceResponseBody\result\columns;

use AlibabaCloud\Tea\Model;

class columnvals extends Model {
    protected $_name = [
        'value' => 'value',
        'date' => 'date',
    ];
    public function validate() {
        Model::validatePattern('date', $this->date, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return columnvals
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        if(isset($map['date'])){
            $model->date = $map['date'];
        }
        return $model;
    }
    /**
     * @description 列值
     * @var string
     */
    public $value;

    /**
     * @description 时间
     * @var string
     */
    public $date;

}
