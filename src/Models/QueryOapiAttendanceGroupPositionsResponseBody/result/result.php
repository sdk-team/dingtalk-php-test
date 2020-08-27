<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceGroupPositionsResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceGroupPositionsResponseBody\result\result\positionList;

class result extends Model {
    protected $_name = [
        'positionList' => 'position_list',
        'hasMore' => 'has_more',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->positionList) {
            $res['position_list'] = [];
            if(null !== $this->positionList && is_array($this->positionList)){
                $n = 0;
                foreach($this->positionList as $item){
                    $res['position_list'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['position_list'])){
            if(!empty($map['position_list'])){
                $model->positionList = [];
                $n = 0;
                foreach($map['position_list'] as $item) {
                    $model->positionList[$n++] = null !== $item ? positionList::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        return $model;
    }
    /**
     * @description position列表
     * @var array
     */
    public $positionList;

    /**
     * @description 是否更多
     * @var bool
     */
    public $hasMore;

}
