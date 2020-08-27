<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsOapiAttendanceResponseBody\result\groups\selectedClass;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\GetsimplegroupsOapiAttendanceResponseBody\result\groups\selectedClass\sections\times;

class sections extends Model {
    protected $_name = [
        'times' => 'times',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->times) {
            $res['times'] = [];
            if(null !== $this->times && is_array($this->times)){
                $n = 0;
                foreach($this->times as $item){
                    $res['times'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        return $res;
    }
    /**
     * @param array $map
     * @return sections
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['times'])){
            if(!empty($map['times'])){
                $model->times = [];
                $n = 0;
                foreach($map['times'] as $item) {
                    $model->times[$n++] = null !== $item ? times::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 时间段列表
     * @var array
     */
    public $times;

}
