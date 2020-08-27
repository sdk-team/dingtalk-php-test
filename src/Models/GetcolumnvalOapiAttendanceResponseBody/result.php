<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetcolumnvalOapiAttendanceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetcolumnvalOapiAttendanceResponseBody\result\columnVals;

class result extends Model {
    protected $_name = [
        'columnVals' => 'column_vals',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->columnVals) {
            $res['column_vals'] = [];
            if(null !== $this->columnVals && is_array($this->columnVals)){
                $n = 0;
                foreach($this->columnVals as $item){
                    $res['column_vals'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['column_vals'])){
            if(!empty($map['column_vals'])){
                $model->columnVals = [];
                $n = 0;
                foreach($map['column_vals'] as $item) {
                    $model->columnVals[$n++] = null !== $item ? columnVals::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 列信息与列值数据
     * @var array
     */
    public $columnVals;

}
