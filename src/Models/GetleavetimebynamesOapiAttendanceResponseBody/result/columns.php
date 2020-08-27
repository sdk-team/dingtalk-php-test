<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavetimebynamesOapiAttendanceResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavetimebynamesOapiAttendanceResponseBody\result\columns\columnvo;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetleavetimebynamesOapiAttendanceResponseBody\result\columns\columnvals;

class columns extends Model {
    protected $_name = [
        'columnvo' => 'columnvo',
        'columnvals' => 'columnvals',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->columnvo) {
            $res['columnvo'] = null !== $this->columnvo ? $this->columnvo->toMap() : null;
        }
        if (null !== $this->columnvals) {
            $res['columnvals'] = [];
            if(null !== $this->columnvals && is_array($this->columnvals)){
                $n = 0;
                foreach($this->columnvals as $item){
                    $res['columnvals'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return columns
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['columnvo'])){
            $model->columnvo = columnvo::fromMap($map['columnvo']);
        }
        if(isset($map['columnvals'])){
            if(!empty($map['columnvals'])){
                $model->columnvals = [];
                $n = 0;
                foreach($map['columnvals'] as $item) {
                    $model->columnvals[$n++] = null !== $item ? columnvals::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 列信息
     * @var columnvo
     */
    public $columnvo;

    /**
     * @description 列值数据
     * @var array
     */
    public $columnvals;

}
