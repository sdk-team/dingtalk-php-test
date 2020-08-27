<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetcolumnvalOapiAttendanceResponseBody\result\columnVals;

use AlibabaCloud\Tea\Model;

class columnVals extends Model {
    protected $_name = [
        'date' => 'date',
        'value' => 'value',
    ];
    public function validate() {
        Model::validatePattern('date', $this->date, '\\d{4}[-]\\d{1,2}[-]\\d{1,2}[T]\\d{2}:\\d{2}:\\d{2}[Z]');
    }
    public function toMap() {
        $res = [];
        if (null !== $this->date) {
            $res['date'] = $this->date;
        }
        if (null !== $this->value) {
            $res['value'] = $this->value;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return columnVals
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['date'])){
            $model->date = $map['date'];
        }
        if(isset($map['value'])){
            $model->value = $map['value'];
        }
        return $model;
    }
    /**
     * @description 时间
     * @var string
     */
    public $date;

    /**
     * @description 列值
     * @var string
     */
    public $value;

}
