<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiWorkspaceCircleGroupResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\ListOapiWorkspaceCircleGroupResponseBody\result\groups;

class result extends Model {
    protected $_name = [
        'groups' => 'groups',
        'hasMore' => 'has_more',
        'nextCursor' => 'next_cursor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->groups) {
            $res['groups'] = [];
            if(null !== $this->groups && is_array($this->groups)){
                $n = 0;
                foreach($this->groups as $item){
                    $res['groups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        return $res;
    }
    /**
     * @param array $map
     * @return result
     */
    public static function fromMap($map = []) {
        $model = new self();
        if(isset($map['groups'])){
            if(!empty($map['groups'])){
                $model->groups = [];
                $n = 0;
                foreach($map['groups'] as $item) {
                    $model->groups[$n++] = null !== $item ? groups::fromMap($item) : $item;
                }
            }
        }
        if(isset($map['has_more'])){
            $model->hasMore = $map['has_more'];
        }
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        return $model;
    }
    /**
     * @description 圈子群列表
     * @var array
     */
    public $groups;

    /**
     * @description 是否有更多数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 下一次分页的游标
     * @var int
     */
    public $nextCursor;

}
