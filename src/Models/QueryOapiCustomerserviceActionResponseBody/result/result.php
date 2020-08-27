<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceActionResponseBody\result;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiCustomerserviceActionResponseBody\result\result\actionList;

class result extends Model {
    protected $_name = [
        'total' => 'total',
        'actionList' => 'action_list',
        'hasMore' => 'has_more',
        'nextCursor' => 'next_cursor',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->total) {
            $res['total'] = $this->total;
        }
        if (null !== $this->actionList) {
            $res['action_list'] = [];
            if(null !== $this->actionList && is_array($this->actionList)){
                $n = 0;
                foreach($this->actionList as $item){
                    $res['action_list'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['total'])){
            $model->total = $map['total'];
        }
        if(isset($map['action_list'])){
            if(!empty($map['action_list'])){
                $model->actionList = [];
                $n = 0;
                foreach($map['action_list'] as $item) {
                    $model->actionList[$n++] = null !== $item ? actionList::fromMap($item) : $item;
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
     * @description 总数
     * @var int
     */
    public $total;

    /**
     * @description 动作列表
     * @var array
     */
    public $actionList;

    /**
     * @description 还有数据
     * @var bool
     */
    public $hasMore;

    /**
     * @description 下一页的游标
     * @var int
     */
    public $nextCursor;

}
