<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceGroupsResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiAttendanceGroupsResponseBody\result\groupList;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'groupList' => 'group_list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->groupList) {
            $res['group_list'] = [];
            if(null !== $this->groupList && is_array($this->groupList)){
                $n = 0;
                foreach($this->groupList as $item){
                    $res['group_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['group_list'])){
            if(!empty($map['group_list'])){
                $model->groupList = [];
                $n = 0;
                foreach($map['group_list'] as $item) {
                    $model->groupList[$n++] = null !== $item ? groupList::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 是否更多
     * @var bool
     */
    public $hasMore;

    /**
     * @description 考勤组
     * @var array
     */
    public $groupList;

}
