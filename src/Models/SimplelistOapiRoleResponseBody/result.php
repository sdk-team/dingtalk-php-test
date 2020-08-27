<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SimplelistOapiRoleResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\SimplelistOapiRoleResponseBody\result\list_;

class result extends Model {
    protected $_name = [
        'hasMore' => 'hasMore',
        'nextCursor' => 'nextCursor',
        'list' => 'list',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }
        if (null !== $this->nextCursor) {
            $res['nextCursor'] = $this->nextCursor;
        }
        if (null !== $this->list) {
            $res['list'] = [];
            if(null !== $this->list && is_array($this->list)){
                $n = 0;
                foreach($this->list as $item){
                    $res['list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['hasMore'])){
            $model->hasMore = $map['hasMore'];
        }
        if(isset($map['nextCursor'])){
            $model->nextCursor = $map['nextCursor'];
        }
        if(isset($map['list'])){
            if(!empty($map['list'])){
                $model->list = [];
                $n = 0;
                foreach($map['list'] as $item) {
                    $model->list[$n++] = null !== $item ? list_::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 后面是否还有数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 下次拉取数据的游标
     * @var int
     */
    public $nextCursor;

    /**
     * @description list
     * @var array
     */
    public $list;

}
