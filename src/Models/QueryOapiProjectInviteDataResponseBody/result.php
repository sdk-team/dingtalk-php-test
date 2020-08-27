<?php

// This file is auto-generated, don't edit it. Thanks.
namespace AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProjectInviteDataResponseBody;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\SDK_DATA_1598238000612\Models\QueryOapiProjectInviteDataResponseBody\result\data;

class result extends Model {
    protected $_name = [
        'hasMore' => 'has_more',
        'nextCursor' => 'next_cursor',
        'data' => 'data',
    ];
    public function validate() {}
    public function toMap() {
        $res = [];
        if (null !== $this->hasMore) {
            $res['has_more'] = $this->hasMore;
        }
        if (null !== $this->nextCursor) {
            $res['next_cursor'] = $this->nextCursor;
        }
        if (null !== $this->data) {
            $res['data'] = [];
            if(null !== $this->data && is_array($this->data)){
                $n = 0;
                foreach($this->data as $item){
                    $res['data'][$n++] = null !== $item ? $item->toMap() : $item;
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
        if(isset($map['next_cursor'])){
            $model->nextCursor = $map['next_cursor'];
        }
        if(isset($map['data'])){
            if(!empty($map['data'])){
                $model->data = [];
                $n = 0;
                foreach($map['data'] as $item) {
                    $model->data[$n++] = null !== $item ? data::fromMap($item) : $item;
                }
            }
        }
        return $model;
    }
    /**
     * @description 是否有更多数据，如果为false，这表示本次查询没有更多的数据了。
     * @var string
     */
    public $hasMore;

    /**
     * @description 下次游标开始
     * @var string
     */
    public $nextCursor;

    /**
     * @description 结果集数据
     * @var array
     */
    public $data;

}
