<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetcolumnvalOapiAttendanceResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetcolumnvalOapiAttendanceResponseBody\result\columnVals\columnVals;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetcolumnvalOapiAttendanceResponseBody\result\columnVals\columnVo;

class columnVals extends Model {
    protected $_name = [
        'columnVals' => 'column_vals',
        'columnVo' => 'column_vo',
        'fixedValue' => 'fixed_value',
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
        if (null !== $this->columnVo) {
            $res['column_vo'] = null !== $this->columnVo ? $this->columnVo->toMap() : null;
        }
        if (null !== $this->fixedValue) {
            $res['fixed_value'] = $this->fixedValue;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return columnVals
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
        if(isset($map['column_vo'])){
            $model->columnVo = columnVo::fromMap($map['column_vo']);
        }
        if(isset($map['fixed_value'])){
            $model->fixedValue = $map['fixed_value'];
        }
        return $model;
    }
    /**
     * @description 列值数据
     * @var array
     */
    public $columnVals;

    /**
     * @description 列信息
     * @var columnVo
     */
    public $columnVo;

    /**
     * @description 一些不需要计算得固定值，如出勤天数等
     * @var string
     */
    public $fixedValue;

}
