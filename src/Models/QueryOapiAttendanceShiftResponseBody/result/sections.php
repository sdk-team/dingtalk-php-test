<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceShiftResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceShiftResponseBody\result\sections\punches;
use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceShiftResponseBody\result\sections\rests;

class sections extends Model {
    protected $_name = [
        'punches' => 'punches',
        'workTimeMinutes' => 'work_time_minutes',
        'rests' => 'rests',
        'id' => 'id',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->punches) {
            $res['punches'] = [];
            if(null !== $this->punches && is_array($this->punches)){
                $n = 0;
                foreach($this->punches as $item){
                    $res['punches'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->workTimeMinutes) {
            $res['work_time_minutes'] = $this->workTimeMinutes;
        }
        if (null !== $this->rests) {
            $res['rests'] = [];
            if(null !== $this->rests && is_array($this->rests)){
                $n = 0;
                foreach($this->rests as $item){
                    $res['rests'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return sections
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['punches'])){
            if(!empty($map['punches'])){
                $model->punches = [];
                $n = 0;
                foreach($map['punches'] as $item) {
                    $model->punches[$n++] = null !== $item ? punches::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['work_time_minutes'])){
            $model->workTimeMinutes = $map['work_time_minutes'];
        }
        if(isset($map['rests'])){
            if(!empty($map['rests'])){
                $model->rests = [];
                $n = 0;
                foreach($map['rests'] as $item) {
                    $model->rests[$n++] = null !== $item ? rests::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['id'])){
            $model->id = $map['id'];
        }
        return $model;
    }
    /**
     * @description 卡点
     * @var array
     */
    public $punches;

    /**
     * @description 工作时长，单位分钟
     * @var int
     */
    public $workTimeMinutes;

    /**
     * @description 休息段
     * @var array
     */
    public $rests;

    /**
     * @description id
     * @var int
     */
    public $id;

}
