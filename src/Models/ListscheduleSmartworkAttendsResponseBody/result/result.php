<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListscheduleSmartworkAttendsResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListscheduleSmartworkAttendsResponseBody\result\result\schedules;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'schedules' => 'schedules',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->schedules) {
            $res['schedules'] = [];
            if(null !== $this->schedules && is_array($this->schedules)){
                $n = 0;
                foreach($this->schedules as $item){
                    $res['schedules'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['schedules'])){
            if(!empty($map['schedules'])){
                $model->schedules = [];
                $n = 0;
                foreach($map['schedules'] as $item) {
                    $model->schedules[$n++] = null !== $item ? schedules::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 分页用，表示是否还有下一页
     * @var bool
     */
    public $hasMore;

    /**
     * @description 排班列表
     * @var array
     */
    public $schedules;

}
