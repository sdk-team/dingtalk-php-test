<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavetimebynamesOapiAttendanceResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavetimebynamesOapiAttendanceResponseBody\result\columns;

class result extends Model {
    protected $_name = [
        'columns' => 'columns',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->columns) {
            $res['columns'] = [];
            if(null !== $this->columns && is_array($this->columns)){
                $n = 0;
                foreach($this->columns as $item){
                    $res['columns'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['columns'])){
            if(!empty($map['columns'])){
                $model->columns = [];
                $n = 0;
                foreach($map['columns'] as $item) {
                    $model->columns[$n++] = null !== $item ? columns::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 列信息与列值数据
     * @var array
     */
    public $columns;

}
